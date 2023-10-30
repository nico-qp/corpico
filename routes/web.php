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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('computadoras', App\Http\Controllers\ComputadoraController::class)->middleware('roles:1,3');
Route::resource('impresoras', App\Http\Controllers\ImpresoraController::class)->middleware('roles:1,3');
Route::resource('sectores', App\Http\Controllers\SectoreController::class)->middleware('roles:1,none');
Route::resource('usos', App\Http\Controllers\UsoController::class)->middleware('roles:1,2');
Route::resource('usuarios-window', App\Http\Controllers\UsuariosWindowController::class)->middleware('roles:1,none');
/*Route::resource('geasys-users', App\Http\Controllers\GeasysUserController::class);*/
Route::resource('condiciones', App\Http\Controllers\CondicioneController::class)->middleware('roles:1,none');
Route::resource('computadoras-impresoras', App\Http\Controllers\ComputadorasImpresoraController::class)->middleware('roles:1,3');
Route::resource('consumibles', App\Http\Controllers\ConsumibleController::class)->middleware('roles:1,2');
Route::resource('computadoras-softwares', App\Http\Controllers\ComputadorasSoftwareController::class)->middleware('roles:1,3');
Route::resource('softwares', App\Http\Controllers\SoftwareController::class)->middleware('roles:1,3');
Route::resource('ubicaciones', App\Http\Controllers\UbicacioneController::class)->middleware('roles:1,none');
Route::resource('tipo-consumibles', App\Http\Controllers\TipoConsumibleController::class)->middleware('roles:1,2');
Route::resource('criticidades', App\Http\Controllers\CriticidadeController::class)->middleware('roles:1,none');
Route::resource('consumibles_impresoras', App\Http\Controllers\ConsumiblesImpresoraController::class)->middleware('roles:1,2');
Route::resource('estados', App\Http\Controllers\EstadoController::class)->middleware('roles:1,none');
Route::resource('roles', App\Http\Controllers\RoleController::class)->middleware('roles:1,none');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
