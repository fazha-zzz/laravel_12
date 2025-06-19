<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


Route::get('/', function () {
    return view('welcome');
});


// route basic
Route::get('/about', function () {
    return "ini halaman about";
});


Route::get('/profile', function () {
    return view('profile');
});


Route::get('siswa', [MyController::class,'index']);

Route::get('siswa/create', [MyController::class,'create']);

Route::post('/siswa', [MyController::class, 'store']);

Route::get('siswa/{id}', [MyController::class,'show']);

Route::get('siswa/{id}/edit', [MyController::class,'edit']);

Route::put('/siswa/{id}', [MyController::class, 'update']);

Route::delete('/siswa/{id}', [MyController::class, 'destroy']);







//route parameter (ditandai {})
Route::get('produk/{NamaProduk}', function($a){
      return 'saya membeli <b>' .$a . '</b>';
});

Route::get('beli/{barang}/{jumlah}', function($a,$b){
      return view('beli', compact('a', 'b'));
});


//route Optional Parameter
Route::get('kategori/{namakategori?}', function($nama = null){
    if ($nama) {
        return 'anda memilih kategori  ' .$nama;
    } else {
        return 'anda belum memiliki kategori';
    };
});


Route::get('harga/{barang?}/{kode?}', function($a = null , $b = null){
    return view('harga', compact('a', 'b'));
    
});