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


Route::resource('computadoras', App\Http\Controllers\ComputadoraController::class);
Route::resource('impresoras', App\Http\Controllers\ImpresoraController::class);
Route::resource('sectores', App\Http\Controllers\SectoreController::class);
Route::resource('usos', App\Http\Controllers\UsoController::class);
Route::resource('usuarios-window', App\Http\Controllers\UsuariosWindowController::class);
Route::resource('geasys-users', App\Http\Controllers\GeasysUserController::class);
Route::resource('condiciones', App\Http\Controllers\CondicioneController::class);
Route::resource('computadoras-impresoras', App\Http\Controllers\ComputadorasImpresoraController::class);
Route::resource('consumibles', App\Http\Controllers\ConsumibleController::class);
Route::resource('computadoras-softwares', App\Http\Controllers\ComputadorasSoftwareController::class);
Route::resource('softwares', App\Http\Controllers\SoftwareController::class);
Route::resource('ubicaciones', App\Http\Controllers\UbicacioneController::class);
Route::resource('tipo-consumibles', App\Http\Controllers\TipoConsumibleController::class);
Route::resource('criticidades', App\Http\Controllers\CriticidadeController::class);
Route::resource('consumibles_impresoras', App\Http\Controllers\ConsumiblesImpresoraController::class);
Route::resource('estados', App\Http\Controllers\EstadoController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
