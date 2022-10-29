<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PrestController;
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
Route::get('prestdados',  [PrestController::class, 'list']);
Route::get('get_prestadores',  [PrestController::class, 'get_prestadores']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
