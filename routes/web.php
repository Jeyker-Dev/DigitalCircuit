<?php

use App\Http\Controllers\AccessDeniedController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableBrandsController;
use App\Http\Controllers\TableCategoriesController;
use App\Http\Controllers\TableProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified', "is.admin"])->name('dashboard');

// Routes Access Denied Controller
Route::get('/access-denied', AccessDeniedController::class)->name('access.denied');

// Routes HomeController
Route::get("/home", [HomeController::class, "index"])->name("home");

// Routes Admin Controller
Route::get("/dashboard", [AdminController::class, "index"])->middleware(['auth', 'verified', "is.admin"])->name("dashboard");

// Routes Products Controller
Route::get("/dashboard/products/create", [ProductsController::class, "create"])->middleware(["auth", "verified", "is.admin"])->name("products.create");

Route::get("/dashboard/products/{product}/edit", [ProductsController::class, "edit"])->middleware(["auth", "verified", "is.admin"])->name("products.edit");

// Routes Categories Controller
Route::get("/dashboard/products/categories/create", [CategoriesController::class, "create"])->middleware((["auth", "verified", "is.admin"]))->name("categories.create");

Route::get("/dashboard/tables/categories/{category}/edit", [CategoriesController::class, "edit"])->middleware(["auth", "verified", "is.admin"])->name("categories.edit");

// Routes Brands Controller
Route::get("/dashboard/products/brands/create", [BrandsController::class, "create"])->middleware(["auth", "verified", "is.admin"])->name("brands.create");

Route::get("/dashboard/products/brands/{brand}/edit", [BrandsController::class, "edit"])->middleware(["auth", "verified", "is.admin"])->name("brands.edit");

// Routes Table Products Controller
Route::get("/dashboard/tables/products", TableProductController::class)->middleware(["auth", "verified", "is.admin"])->name("table.products");

// Routes Table Categories Controller
Route::get("/dashboard/tables/categories", TableCategoriesController::class)->middleware(["auth", "verified", "is.admin"])->name("table.categories");

// Routes Table Brands Controller
Route::get("/dashboard/tables/brands", TableBrandsController::class)->middleware(["auth", "verified", "is.admin"])->name("table.brands");

// Routes Admin Profile Controller
Route::get("/dashboard/profile", [AdminProfileController::class, "render"])->middleware(["auth", "verified", "is.admin"])->name("myprofile.show");

// Routes Profile Controller
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
