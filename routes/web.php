<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\CheckoutController;
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





Route::get('/cekdash', function () {
    return view('admin.dashboard.index');
});
Route::get('/ckout', function () {
    return view('user.checkout');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/pesanan', function () {
    return view('admin.pesanan.index');
});
Route::get('/cust', function () {
    return view('admin.customers.index');
});

Route::post('/logout', [LoginController::class, 'logout']);

//penting

//test ongkir
Route::resource('/cekot', CheckoutController::class);
Route::get('/getCity/{province_id}', [CheckoutController::class, 'getCities']);
Route::post('/cekongkir', [CheckoutController::class, 'check_ongkir']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/products', [HomeController::class, 'product']);
Route::get('/category', [HomeController::class, 'category']);

Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/', function () {
    //     return view('user.home');
    // });
Route::get('/', [HomeController::class, 'index']);

Route::get('/products', [HomeController::class, 'product']);
Route::get('/category', [HomeController::class, 'category']);

Route::post('/logout', [LoginController::class, 'logout']);

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
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/carts', [HomeController::class, 'cart']);

    Route::resource('/detail-product', HomeController::class);
    // Route::post('/logout', [LoginController::class, 'logout']);
    
});

// auth login admin
Route::group(['middleware' => 'isAdmin'], function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/order', OrderController::class);
    Route::resource('/customer', CustomerController::class);
    
    // Route::post('/logout', [LoginController::class, 'logout']);
});
