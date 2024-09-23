<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        $user = Auth::user();

        if ($request->user()->hasVerifiedEmail()) {
            if( $user->hasRole("admin") )
            {
                return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
            }   // Here End If

            if( $user->hasRole("user") )
            {
                return redirect()->intended(route('home', absolute: false).'?verified=1');
            }   // Here End If
        }   // Here End If

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }   // Here End If

        if( $user->hasRole("admin") )
        {
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
        }   // Here End If

        if( $user->hasRole("user") )
        {
            return redirect()->intended(route('home', absolute: false).'?verified=1');
        }   // Here End If
    }   // Here End Function
}   // Here End Class
