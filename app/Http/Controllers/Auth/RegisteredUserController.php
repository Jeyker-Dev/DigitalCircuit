<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Services\RolePermissionService;

class RegisteredUserController extends Controller
{
    protected $rolePermissionService;

    public function __construct(RolePermissionService $rolePermissionService)
    {
        $this->rolePermissionService = $rolePermissionService;
    }   // Here End Function Construct

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }   // Here End Function Create

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the User With the Name Admin Exist
        if( $request->name === "admin" && User::where("name", "admin")->exists() )
        {
            return back()->withErrors(["name" => "No se Puede Usar el Nombre de Admin. Por Favor Usa otro Nombre."]);
        }   // Here End If

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        // Call the service to create roles and permissions
        $this->rolePermissionService->createRolesPermissions();

        return redirect(route('verification.notice', absolute: false));
    }   // Here End Function Store
}   // Here End Class