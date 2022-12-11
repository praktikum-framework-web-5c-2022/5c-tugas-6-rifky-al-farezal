<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('merk')->group(function(){
    Route::get('/', [MerkController::class,'index'])->name('merks.index');
    Route::get('/create', [MerkController::class,'create'])->name('merks.create');
    Route::get('/createproduct', [MerkController::class,'createproduct'])->name('merks.createproduct');
    Route::post('/store', [MerkController::class,'store'])->name('merks.store');
    Route::post('/storeproduct', [MerkController::class,'storeproduct'])->name('merks.storeproduct');
});

Route::prefix('produk')->group(function(){
    Route::get('/{merk}', [ProdukController::class,'index'])->name('produks.index');
    Route::get('/edit/{id}', [ProdukController::class,'edit'])->name('produks.edit');
    Route::put('/update/{id}', [ProdukController::class,'updateproduct'])->name('produks.updateproduct');
    Route::delete('/delete/{id}', [ProdukController::class,'destroy'])->name('produks.destroy');
});
