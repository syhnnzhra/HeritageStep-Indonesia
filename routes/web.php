<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleAuthController;

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

Route::get('/cek', function () {
    return view('admin.dashboard');
});

Route::get('/', function () {
    return view('user.home');
});

//guest untuk yg tidak login
Route::group(['middleware' => 'guest'], function () {
    // login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    // login google
    Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
    Route::get('/auth/google/callback', [GoogleAuthController::class, 'callbackGoogle']);

    // register
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']); 
    
});

//auth login user
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/order', OrderController::class);
    Route::resource('/customer', CustomerController::class);

    Route::post('/logout', [LoginController::class, 'logout']);
    
});