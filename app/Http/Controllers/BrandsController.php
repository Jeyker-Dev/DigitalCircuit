<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function create()
    {
        return view("admin.products.create-brand");
    }   // Here End Function
}   // Here End Class
