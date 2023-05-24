<?php

use App\Http\Controllers\api\equiposController;
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

Route::get('equipos', [equiposController::class,'index']);
Route::post('equipos', [equiposController::class,'store']);
Route::get('Es/{equipo}{aula}', [equiposController::class,'show']);
Route::put('equipos/{equipo}{aula}', [equiposController::class,'update']);
Route::delete('equipos/{equipo}{aula}', [equiposController::class,'destroy']);
