<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\GrupoTrabajoController;
use App\Http\Controllers\OrdenTrabajoController;


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

Route::resource('vehiculo', App\Http\Controllers\VehiculoController::class);

Route::resource('empleado', App\Http\Controllers\EmpleadoController::class);

Route::resource('grupo-trabajo', App\Http\Controllers\GrupoTrabajoController::class);

Route::resource('orden-trabajo', App\Http\Controllers\OrdenTrabajoController::class);