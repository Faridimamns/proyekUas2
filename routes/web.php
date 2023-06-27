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
Route::get('/kategori',[KategoriProdukController::class, 'index' ]);

// rute prduk
Route::get('/produk',[ProdukController::class, 'index' ]);

//rute pesanan 
Route::get('/pesanan',[PesananController::class, 'index' ]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
