<?php

use App\Http\Controllers\JenisProductController;
use App\Http\Controllers\ProductController;
use App\Models\JenisProduct;
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
})->name('home');

Route::get('/create/jenis', [JenisProductController::class, 'view'])->name('createJenisProduk');
Route::post('/create/jenis', [JenisProductController::class, 'create']);

Route::get('/create/produk', [ProductController::class, 'view'])->name('createProduk');
Route::post('/create/produk', [ProductController::class, 'create']);