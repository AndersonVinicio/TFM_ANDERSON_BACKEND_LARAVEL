<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerCitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * API QUE TE MUESTRA TODAS LAS CITAS QUE HAY
 */
Route::get('/showCitas', [ControllerCitas::class, 'showAll']);

/**
 * API PARA AGREGAR UNA NUEVA CITA
 */
Route::post('/addCita', [ControllerCitas::class, 'addCita']);

/**
 * ENDPOINT QUE ELIMINA CITA POR ID
 */
Route::delete('/deleteCita/{id}', [ControllerCitas::class, 'deleteCita']);
