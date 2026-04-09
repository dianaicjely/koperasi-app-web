<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::resource('products', ProductController::class);
Route::resource('loans', LoanController::class);