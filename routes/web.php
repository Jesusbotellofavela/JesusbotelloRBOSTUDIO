<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\TransaccionController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//CONTRATO
Route::get('contrato/create',[ContratoController::class, 'create']);
Route::resource('contrato',ContratoController::class);
Route::get('delete/{id}',[ContratoController::class, 'destroy']);
Route::post('/contrato/{id}/ContratoEdit', [ContratoController::class, 'update'])->name('contrato.update');
Route::put('/contrato/{id}/ContratoEdit', [ContratoController::class, 'update'])->name('contrato.update');





//Transaccion
Route::get('transaccion/create',[TransaccionController::class, 'create']);
Route::resource('transaccion',TransaccionController::class);
Route::get('delete/{id}',[TransaccionController::class, 'destroy']);
Route::post('/transaccion/{id}/TransaccionEdit', [TransaccionController::class, 'update'])->name('transaccion.update');
Route::put('/transaccion/{id}/TransaccionEdit', [TransaccionController::class, 'update'])->name('transaccion.update');





//Equipo
Route::get('equipo/create',[EquipoController::class, 'create']);
Route::resource('equipo',EquipoController::class);
Route::get('delete/{id}',[EquipoController::class, 'destroy']);
Route::post('/equipo/{id}/EquipoEdit', [EquipoController::class, 'update'])->name('equipo.update');
Route::put('/equipo/{id}/EquipoEdit', [EquipoController::class, 'update'])->name('equipo.update');



//Sesion
Route::get('sesion/create',[SesionController::class, 'create']);
Route::resource('sesion',SesionController::class);
Route::get('delete/{id}',[SesionController::class, 'destroy']);
Route::post('/sesion/{id}/SesionEdit', [SesionController::class, 'update'])->name('sesion.update');
Route::put('/sesion/{id}/SesionEdit', [SesionController::class, 'update'])->name('sesion.update');



//Clientes
Route::get('Clientes/create',[ClienteController::class, 'create']);
Route::resource('Clientes',ClienteController::class);




