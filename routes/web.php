<?php

use App\Http\Controllers\CComputoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

//ruta de la pagina principal
Route::get('/', function () {
    return view('home');
});
//ruta de la pagina del registro
Route::get('/registroBitacora', [RegisterController::class,'create'])
->name('register.index');

//ruta de la pagina del registro
Route::post('/registroBitacora', [RegisterController::class,'store'])
->name('register.store');

//ruta de la pagina del login alumno
Route::get('/loginAlumno', [SessionController::class, 'create'])
->name('login.index');
//ruta de la pagina del centro computo
Route::get('/computo', [CComputoController::class,'create'])
->name('computo.index');

