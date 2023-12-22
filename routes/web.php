<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RajaOngkirController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ItemController;

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
Route::get('/pro', function () {
    return view('admin.produk.index');
});
Route::get('/edit', function () {
    return view('admin.edit.index');
    // public function insertdata(request $request) {
    //     employee::create($request->all());
    //     return redirect()->route('pro')
    // };
});
Route::get('/hapus', function () {
    return view('admin.hapus_produk.index');
});
Route::get('/add', function () {
    return view('admin.tambah_produk.index');
    
});

Route::post('/logout', [LoginController::class, 'logout']); 
Route::get('/admin/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
// public function insertdata(request $request) {
//     employee::create($request->all());
//     return redirect()->route('pro')
// };

//penting

Route::get('/', [HomeController::class, 'index']);

Route::get('/products', [HomeController::class, 'product']);
Route::get('/category', [HomeController::class, 'category']);
Route::get('/category-products/{category}', [HomeController::class, 'product']);

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
    // Route::get('/carts', [HomeController::class, 'cart']);
    Route::get('/my-order', [HomeController::class, 'order']);
    Route::get('/track', [HomeController::class, 'track']);

    Route::resource('/detail-product', HomeController::class);
    Route::post('/order/item/{item_id}', [OrderController::class, 'orderItem'])->name('order.item');

    // percobaan ongkir
    Route::get('/ongkir', [RajaOngkirController::class, 'index']);
    Route::get('/get-cities', [RajaOngkirController::class, 'getCities']);
    // Route::post('/calculate-shipping-cost', [RajaOngkirController::class, 'calculateShippingCost'])->name('calculateShippingCost');
    
    Route::get('/carts', [CartController::class, 'showCart']);
    
    // Route::get('/checkout', [CheckoutController::class, 'checkout']);
    Route::resource('/checkout', CheckoutController::class);
    Route::post('/rajaongkir/getCost', [CheckoutController::class, 'getCost']);

    Route::get('/midtrans', [MidtransController::class, 'index']);
    Route::post('/midtrans/notification', [MidtransController::class, 'notification']);
});

// auth login admin
Route::group(['middleware' => 'isAdmin'], function () {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/order', OrderController::class);
    Route::resource('/customer', CustomerController::class);
    Route::resource('/pesanan', PesananController::class);
    Route::resource('/laporan', LaporanController::class);
    Route::resource('/produk', ItemController::class);
    
    // Route::post('/logout', [LoginController::class, 'logout']);
});
