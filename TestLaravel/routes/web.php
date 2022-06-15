<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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

Route::get('/', [EmployeeController::class, 'index']);
Route::post('/employees/store', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/getAll', [EmployeeController::class, 'getAll'])->name('employees.getAll');
Route::get('/employees/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::post('/employees/update', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/delete', [EmployeeController::class, 'destroy'])->name('employees.delete');
Route::get('/test', function(){
    $lang = session('lang');
    App::setLocale($lang);
    echo __('messages.hello',['name' => 'Admin']);
});
Route::get('/changelang/{lang}', function($lang){
    session(['lang' => $lang]);
    return redirect('test');
});
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::post('/change-pass', [AuthController::class, 'changePassWord']);
});

