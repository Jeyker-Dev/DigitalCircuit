<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class TableBrandsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $brands = Brand::all();
        return view("admin.tables.manage-brands", [
            "brands" => $brands
        ]);
    }   // Here End Function
}   // Here End Class
