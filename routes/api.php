<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Tareas;
use App\Http\Controllers\tareaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


    Route::post('/tarea', [tareaController::class, "crearUnaTarea"]);
    Route::put('/tarea/$id', [tareaController::class, "modificarUnaTarea"]);
    Route::delete('/tarea/$id', [tareaController::class, "eliminarUnaTarea"]);
    Route::get('/tareas', [tareaController::class, "devolverTodasLasTareas"]);
    Route::get('/tarea/$id', [tareaController::class,"buscarUnaTarea"]);

