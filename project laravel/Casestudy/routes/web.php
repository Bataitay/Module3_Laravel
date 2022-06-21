<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('products/trashed', [productController::class, 'trashed'])->name('products.trashed');
Route::get('products/restore/{id}', [productController::class, 'restore'])->name('products.restore');
Route::get('products/forceDelete/{id}', [productController::class, 'forceDelete'])->name('products.forceDelete');
Route::get('category/{id}/products', [productController::class, 'getProducts'])->name('category.products');
// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [dashboardController::class, 'dashboard']);
    Route::resource('category', categoryController::class);
    Route::resource('product', productController::class);


});
require __DIR__.'/auth.php';


