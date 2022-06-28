<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\abogadosController;

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
    return view('principal');
});

Route::get('/contacto', function () {
    return view('Contacto');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/audiencias', function () {
    return view('audiencias');
});

Route::get('/audiencias/{id}', function ($id) {
    return "Mostrando la informacion de la audiencia con el id: {$id}";
})->where('id', '[0-9+]');

Route::get('/clientes', function () {
    return view('clientes');
});


Route::get('/clientes/{id}', [clientesController::class, 'show'])->where('id', '[0-9]+');

Route::get('/clientes/{name}/{lastname?}', [clientesController::class, 'nombre']);

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/servicios/{id}', function ($id) {
    return "Mostrando la informacion del servicio con el id: {$id}";
})->where('id', '[0-9+]');

Route::get('/tipo-servicio', function () {
    return view('tipo-servicio');
});

Route::get('/abogados', function () {
    return view('abogados');
});

Route::get('/abogados/{id}', [abogadosController::class, 'show'])->where('id', '[0-9]+');

Route::get('/tribunales', function () {
    return view('tribunales');
});

Route::get('/usuarios', [UserController::class, 'index']);

Route::get('/usuarios/nuevo', [UserController::class, 'create']);

Route::get('/usuarios/{id}', [UserController::class, 'show'])->where('id', '[0-9]+');
