<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('admin.products.create-categories');
    }   // Here End Function

    public function edit(Categories $category)
    {
        return view("admin.products.edit-category", 
        [
            "category" => $category
        ]);
    }   // Here End Function
}   // Here End Class
