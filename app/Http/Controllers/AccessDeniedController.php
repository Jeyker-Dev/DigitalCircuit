<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessDeniedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('auth.access-denied');
    }   // Here End Function Invoke
}   // Here End Class AccessDenied
