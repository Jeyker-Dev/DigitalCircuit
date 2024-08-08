<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use Spatie\Permission\Models\Permission;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
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

        // Create Roles
        $adminRole = Role::firstOrCreate([ "name" => "admin"]);
        $userRole = Role::firstOrCreate(["name" => "user"]);

        // Create Permissions
        $adminPermissions = Permission::firstOrCreate(["name" => "manage products"]);
        $userPermissions = Permission::firstOrCreate(["name" => "see products"]);

        // Give Permission To a Role
        $adminRole->givePermissionTo($adminPermissions);
        $userRole->givePermissionTo($userPermissions);

        // Create Admin User
        $adminUser = User::where("name", "admin")->first();

        // Create Users
        $users = User::where('name', '!=', 'admin')->get();

        if( $adminUser )
        {
            $adminUser->assignRole($adminRole);
        }   // Here End If
        if( $users )
        {
            foreach( $users as $user)
            {
                $user->assignRole($userRole);
            }   // Here End Foreach
        }   // Here End If

        return redirect(route('verification.notice', absolute: false));
    }
}
