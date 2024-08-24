<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view("admin.tables.products");
    }   // Here End Function
}
