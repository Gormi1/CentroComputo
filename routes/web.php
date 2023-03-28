<?php

use App\Http\Controllers\CComputoController;
use App\Http\Controllers\CComputoBController;
use App\Http\Controllers\LoginControlle;
use Illuminate\Support\Facades\Route;

use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

//ruta de la pagina principal
Route::get('/', function () {
    return view('home');
});
//login alumno

Route::any('/alumno',[LoginControlle::class,'create'])->name('alumno.alumno');
// Route::post('/login', [LoginController::class, 'login']);


//ruta de la pagina del centro computo
Route::get('/compu', [CComputoController::class,'create'])
->name('computo.index');
Route::get('/compuB', [CComputoBController::class,'create'])
->name('computoB.index');


