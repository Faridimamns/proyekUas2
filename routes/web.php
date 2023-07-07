<?php

use App\Http\Controllers\frontController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriProdukController;


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

Route::get('/jamku',[frontController::class, 'index' ]);

Route::get('/kategori_produk',[KategoriProdukController::class, 'index' ]);
Route::get('/kategori_produk/create',[KategoriProdukController::class, 'create']);
Route::post('/kategori_produk/store',[KategoriProdukController::class,'store']);
Route::get('/kategori_produk/edit/{id}',[KategoriProdukController::class, 'edit']);
Route::post('/kategori_produk/update',[KategoriProdukController::class, 'update']);
Route::get('/kategori_produk/delete/{id}',[KategoriProdukController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

