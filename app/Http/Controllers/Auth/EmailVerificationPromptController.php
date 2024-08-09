<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        $user = Auth::user();
        if( $user->hasRole("user") )
        {
            return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('home', absolute: false))
                    : view('auth.verify-email');
        }   // Here End If
        if( $user->hasRole("admin") )
        {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard', absolute: false))
                    : view('auth.verify-email');
        }   // Here End If
    }   // Here End Function
}   // Here End Class
