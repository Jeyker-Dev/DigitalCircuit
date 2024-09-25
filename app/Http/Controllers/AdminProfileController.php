<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function render()
    {
        return view("admin.profile.show");
    }   // Here End Function
}   // Here End Class
