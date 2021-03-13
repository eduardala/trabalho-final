<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NovoController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\TelefonesController;
use App\Http\Controllers\ClientesPedidosController;

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
    return view('index');
});

Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClientesController::class, 'create']);
Route::post('/clientes/create', [ClientesController::class, 'store'])->name('cadastro-cliente');
Route::get('/clientes/ver/{id}', [ClientesController::class, 'show']);
Route::get('/clientes/editar/{id}', [ClientesController::class, 'edit']);
Route::post('/clientes/editar/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::post('/clientes/excluir/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

Route::get('/documentos', [DocumentosController::class, 'index'])->name('documentos.index');;
Route::get('/documentos/create', [DocumentosController::class, 'create']);
Route::post('/documentos/create', [DocumentosController::class, 'store'])->name('cadastro-documento');
Route::get('/documentos/ver/{id}', [DocumentosController::class, 'show']);
Route::get('/documentos/editar/{id}', [DocumentosController::class, 'edit']);
Route::post('/documentos/editar/{id}', [DocumentosController::class, 'update'])->name('documentos.update');
Route::post('/documentos/excluir/{id}', [DocumentosController::class, 'destroy'])->name('documentos.destroy');

Route::get('/telefones', [TelefonesController::class, 'index'])->name('telefones.index');;
Route::get('/telefones/create', [TelefonesController::class, 'create']);
Route::post('/telefones/create', [TelefonesController::class, 'store'])->name('cadastro-telefone');
Route::get('/telefones/ver/{id}', [TelefonesController::class, 'show']);
Route::get('/telefones/editar/{id}', [TelefonesController::class, 'edit']);
Route::post('/telefones/editar/{id}', [TelefonesController::class, 'update'])->name('telefones.update');
Route::post('/telefones/excluir/{id}', [TelefonesController::class, 'destroy'])->name('telefones.destroy');

Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos.index');;
Route::get('/pedidos/create', [PedidosController::class, 'create']);
Route::post('/pedidos/create', [PedidosController::class, 'store'])->name('cadastro-pedido');
Route::get('/pedidos/ver/{id}', [PedidosController::class, 'show']);
Route::get('/pedidos/editar/{id}', [PedidosController::class, 'edit']);
Route::post('/pedidos/editar/{id}', [PedidosController::class, 'update'])->name('pedidos.update');
Route::post('/pedidos/excluir/{id}', [PedidosController::class, 'destroy'])->name('pedidos.destroy');

Route::get('/pc', [ClientesPedidosController::class, 'index'])->name('pc.index');;
Route::get('/pc/create', [ClientesPedidosController::class, 'create']);
Route::post('/pc/create', [ClientesPedidosController::class, 'store'])->name('cadastro-pc');
Route::get('/pc/ver/{id}', [ClientesPedidosController::class, 'show']);
Route::get('/pc/editar/{id}', [ClientesPedidosController::class, 'edit']);
Route::post('/pc/editar/{id}', [ClientesPedidosController::class, 'update'])->name('pc.update');
Route::post('/pc/excluir/{id}', [ClientesPedidosController::class, 'destroy'])->name('pc.destroy');


