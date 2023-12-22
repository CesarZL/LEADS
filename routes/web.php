<?php

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

Auth::routes();

// contactos
Route::get('/contactos', [App\Http\Controllers\ContactosController::class, 'index'])->name('contactos.index');
// empresa
Route::get('/empresa', [App\Http\Controllers\EmpresaController::class, 'index'])->name('empresa.index');
// eventos
Route::get('/eventos', [App\Http\Controllers\EventosController::class, 'index'])->name('eventos.index');
// productos
Route::get('/productos', [App\Http\Controllers\ProductosController::class, 'index'])->name('productos.index');
// pedidos de productos
Route::get('/pedidos', [App\Http\Controllers\PedidosController::class, 'index'])->name('pedidos.index');
// matriz de interacción
Route::get('/matriz', [App\Http\Controllers\MatrizController::class, 'index'])->name('matriz.index');


