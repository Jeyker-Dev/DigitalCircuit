<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class TableCategoriesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $categories = Categories::all();
        return view("admin.tables.manage-categories", [
            "categories" => $categories
        ]);
    }
}
