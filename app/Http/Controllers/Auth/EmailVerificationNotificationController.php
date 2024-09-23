<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        $user = Auth::user();

        if ($request->user()->hasVerifiedEmail()) 
        {
            if( $user->hasRole("user") )
            {
                return redirect()->intended(route('home', absolute: false));
            }   // Here End If
            if( $user->hasRole("admin") )
            {
                return redirect()->intended(route('dashboard', absolute: false));
            }   // Here End If
        }   // Here End 

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
