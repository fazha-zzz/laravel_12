<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Beckend\ProductController;
use App\Http\Controllers\Beckend\OrderController as BeckendOrderController;
use App\Http\Controllers\Beckend\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReviewController;
use App\Http\Middleware\admin;
use Illuminate\Support\Facades\Auth;




// Route::get('/', function () {
//     return view('layouts.frontend');
// });


// // route basic
// Route::get('/about', function () {
//     return "ini halaman about";
// });


// Route::get('/profile', function () {
//     return view('profile');
// });


// Route::get('siswa', [MyController::class,'index']);

// Route::get('siswa/create', [MyController::class,'create']);

// Route::post('/siswa', [MyController::class, 'store']);

// Route::get('siswa/{id}', [MyController::class,'show']);

// Route::get('siswa/{id}/edit', [MyController::class,'edit']);

// Route::put('/siswa/{id}', [MyController::class, 'update']);

// Route::delete('/siswa/{id}', [MyController::class, 'destroy']);







// //route parameter (ditandai {})
// Route::get('produk/{NamaProduk}', function($a){
//       return 'saya membeli <b>' .$a . '</b>';
// });

// Route::get('beli/{barang}/{jumlah}', function($a,$b){
//       return view('beli', compact('a', 'b'));
// });


// //route Optional Parameter
// Route::get('kategori/{namakategori?}', function($nama = null){
//     if ($nama) {
//         return 'anda memilih kategori  ' .$nama;
//     } else {
//         return 'anda belum memiliki kategori';
//     };
// });


// Route::get('harga/{barang?}/{kode?}', function($a = null , $b = null){
//     return view('harga', compact('a', 'b'));
    
// });

//route member /quest





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//input controllernya
// route untuk admin/backend
Route::group(['prefix'=>'admin', 'as'=>'backend.', 'middleware'=> ['auth',admin::class]], function () {
    Route::get('/', [BackendController::class,'index']);

    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::resource('/orders', BeckendOrderController::class);
    Route::put('/orders/{id}/status', [BeckendOrderController::class, 'updateStatus'])->name('orders.updateStatus');
});

Route::get('/',[FrontendController::class, 'index']);
Route::get('/product',[FrontendController::class, 'product'])->name('product.index');
Route::get('/product/{product}',[FrontendController::class, 'singleProduct'])->name('product.show');
Route::get('/product/category/{slug}',[FrontendController::class, 'filterByCategory'])->name('product.filter');
Route::get('/search',[FrontendController::class, 'search'])->name('product.search');

Route::get('/about',[FrontendController::class, 'about']);


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/add-to-cart/{product}',[CartController::class, 'addToCart'])->name('cart.add');
Route::put('/cart/update/{id}',[CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/{id}',[CartController::class, 'remove'])->name('cart.remove');


Route::get('/checkout',[CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/orders',[OrderController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}',[OrderController::class, 'show'])->name('orders.show');


//review
Route::post('/product/{product}/review', [\App\Http\Controllers\ReviewController::class, 'store'])
    ->middleware('auth')->name('review.store');



