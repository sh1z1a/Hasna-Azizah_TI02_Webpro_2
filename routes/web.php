<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::GET('/', function () {
    return view('welcome');
});
Route::get('/after_register', function(){
    return view('after_register');
});

Route::group(['middleware' => ['auth', 'peran:admin-manager']], function(){
    
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/produk/update', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
    Route::post('/pesanan/update', [PesananController::class, 'update']);
    Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);

    Route::get('/kategori', [KategoriProdukController::class, 'index']);
    Route::get('/kategori/create', [KategoriProdukController::class, 'create']);
    Route::post('/kategori/store', [KategoriProdukController::class, 'store']);
    Route::get('/kategori/edit/{id}', [KategoriProdukController::class, 'edit']);
    Route::post('/kategori/update', [KategoriProdukController::class, 'update']);
    Route::get('/kategori/delete/{id}', [KategoriProdukController::class, 'destroy']);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
