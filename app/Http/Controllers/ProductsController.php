<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function render()
    {
        return view("admin.products.manage-products");
    }   // Here End Function
}   // Here End Class
