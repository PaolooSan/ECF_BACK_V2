<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// use App\Htpp\Controllers\DimensionController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::resource('/products', ProductController::class);
Route::post('/products/create', [ProductController::class, 'store'])->name('products.store');
Route::put('/products/edit/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
// Route::get('/products/dimensions/{id}', [ProductController::class, 'show']);
// Route::get('/dimensions/{id}', [DimensionController::class, 'show']);

