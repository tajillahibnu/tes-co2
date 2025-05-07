<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products/top-selling', [ProductController::class, 'topSelling']);
Route::get('/customers/top-order', [ProductController::class, 'topCustomers']);
Route::get('/agent/top-customers', [ProductController::class, 'topAgents']);
