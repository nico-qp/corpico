<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('pcs', App\Http\Controllers\PcController::class);
Route::resource('impresoras', App\Http\Controllers\ImpresoraController::class);

Route::resource('pc-stock', App\Http\Controllers\PcStockController::class);
Route::resource('impresora-stock', App\Http\Controllers\ImpresorasStockController::class);
Route::resource('tonner', App\Http\Controllers\TonnerController::class);
Route::resource('cartucho', App\Http\Controllers\CartuchoController::class);

Route::resource('sectores', App\Http\Controllers\SectoreController::class);