<?php

use App\Http\Controllers\AccessDeniedController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
