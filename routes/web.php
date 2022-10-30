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
use App\Http\Controllers\PrestController;
use App\Http\Controllers\ServicosController;

Route::get('/', [PrestController::class, 'index']);
Route::post('/inserir', [PrestController::class, 'store']);
Route::post('/importar', [ServicosController::class, 'store']);
Route::get('/exibir', [PrestController::class, 'list']);
Route::get('/csv', [ServicosController::class, 'csvpage']);
Route::get('/buscar', [PrestController::class, 'list']);


