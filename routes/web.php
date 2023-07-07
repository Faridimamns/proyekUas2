<?php

use App\Http\Controllers\frontController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome'); 
});

// rute front landing pages
Route::get('/jamku',[frontController::class, 'index' ]);

//rute kategori
Route::get('/kategori_produk',[KategoriProdukController::class, 'index' ]);
Route::get('/kategori_produk/create',[KategoriProdukController::class, 'create']);
Route::post('/kategori_produk/store',[KategoriProdukController::class,'store']);
Route::get('/kategori_produk/edit/{id}',[KategoriProdukController::class, 'edit']);
Route::post('/kategori_produk/update',[KategoriProdukController::class, 'update']);
Route::get('/kategori_produk/delete/{id}',[KategoriProdukController::class, 'destroy']);

// rute prduk
Route::get('/produk',[ProdukController::class, 'index' ]);
Route::get('/produk/create',[ProdukController::class, 'create']);
Route::post('/produk/store',[ProdukController::class,'store']);
Route::get('/produk/edit/{id}',[ProdukController::class, 'edit']);
Route::post('/produk/update',[ProdukController::class, 'update']);
Route::get('/produk/delete/{id}',[ProdukController::class, 'destroy']);

//rute pesanan 
Route::get('/pesanan', [PesananController::class, 'index']);
Route::get('/pesanan/create', [PesananController::class, 'create']);
Route::post('/pesanan/store', [PesananController::class, 'store']);
Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
Route::post('/pesanan/update', [PesananController::class, 'update']);
Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

