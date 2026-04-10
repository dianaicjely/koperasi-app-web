<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InstallmentController;
use App\Http\Controllers\ReportController;

Route::get('/', [DashboardController::class, 'index']);

Route::resource('products', ProductController::class);
Route::get('/cashier', [CashierController::class, 'index']);
Route::post('/cashier/checkout', [CashierController::class, 'checkout']);

Route::resource('members', MemberController::class);
Route::resource('suppliers', SupplierController::class);

Route::get('/installments', [InstallmentController::class, 'index']);
Route::post('/installments/pay/{id}', [InstallmentController::class, 'pay']);

Route::get('/savings-loans', [SavingsLoanController::class, 'index']);
Route::post('/savings-loans/store', [SavingsLoanController::class, 'store']);

Route::get('/reports', [ReportController::class, 'index']);