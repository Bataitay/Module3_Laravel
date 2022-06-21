<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\categoryController;
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
// Route::group(['prefix' => 'categories'], function () {
// Route::get('/', [categoryController::class, 'index'])->name('categories.index');
// Route::get('/create', [categoryController::class, 'create'])->name('categories.create');
// Route::post('/store', [categoryController::class, 'store'])->name('categories.store');
// Route::get('/{id}/edit', [categoryController::class, 'edit'])->name('categories.edit');
// Route::post('/{id}/update', [categoryController::class, 'update'])->name('categories.update');
// Route::delete('/destroy', [categoryController::class, 'destroy'])->name('categories.delete');
// Route::get('/{id}/show', [categoryController::class, 'show'])->name('categories.show');
// });
Route::resource('categories',categoryController::class);
Route::resource('products', \productController::class);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
