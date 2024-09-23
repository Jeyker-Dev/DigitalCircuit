<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function create()
    {
        return view("admin.products.create-products");
    }   // Here End Function

    public function edit(Products $product)
    {
        return view("admin.products.edit-product", 
        [
            "product" => $product
        ]);
    }   // Here End Function
}   // Here End Class
