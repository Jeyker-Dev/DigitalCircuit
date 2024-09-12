<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function create()
    {
        return view("admin.products.create-brand");
    }   // Here End Function

    public function edit(Brand $brand)
    {
        return view("admin.products.edit-brand", [
            "brand" => $brand
        ]);
    }   // Here End Class
}   // Here End Class
