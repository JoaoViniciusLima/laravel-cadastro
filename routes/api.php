<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestController;
use App\Http\Controllers\ServicosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('serviços',  [ServicosController::class, 'get_servicos']);
Route::get('prestadores',  [PrestController::class, 'get_prestadores']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
