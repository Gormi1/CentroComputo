<?php

use App\Http\Controllers\CComputoController;
use App\Http\Controllers\CComputoBController;
use App\Http\Controllers\registroBitacoraController;
use Illuminate\Support\Facades\Route;

use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

//ruta de la pagina principal
Route::get('/', function () {
    return view('home');
});
//login alumno

Route::get('/alumno/create',[registroBitacoraController::class,'create'])->name('alumno.alumno');
Route::post('/registro', [registroBitacoraController::class, 'store']);


//ruta de la pagina del centro computo
Route::get('/compu', [CComputoController::class,'create'])
->name('computo.index');
Route::get('/compuB', [CComputoBController::class,'create'])
->name('computoB.index');


