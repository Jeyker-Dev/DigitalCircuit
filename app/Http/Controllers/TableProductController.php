<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class TableProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $products = Products::all();
        return view("admin.tables.manage-products", 
        [
            "products" => $products
        ]);
    }   // Here End Function
}
