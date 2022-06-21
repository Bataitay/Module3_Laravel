<?php

use App\Http\Controllers\interfaceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\profileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function () {
    Route::get('/interface', [interfaceController::class, 'index'])->name('interface');

    Route::get('/profile/{user}', [profileController::class, 'index'])->name('profile');
    Route::get('/profile/{user}/edit', [profileController::class, 'edit'])->name('profile.edit');
    Route::put('/upload_avatar/{user}',  [profileController::class, 'update'])->name('profile.update');
    Route::put('/profile/{user}/upload_avatar', [profileController::class, 'upload_avatar'])->name('profile.upload_avatar');
    // Route::put('/profile/avatar', [profileController::class, 'avatar'])->name('profile.avatar');
    // Route::resource('profile', profileController::class);

    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
});
require __DIR__ . '/auth.php';
