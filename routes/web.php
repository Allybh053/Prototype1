<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    // Force logout if already logged in
    if (Auth::check()) {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }
    return view('welcome'); // Your landing page
});

Auth::routes();

// User Routes
Route::middleware(['auth', 'user-role:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'userHome'])->name('home');
});

// Admin Routes
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
