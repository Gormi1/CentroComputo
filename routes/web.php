<?php

use App\Http\Controllers\CComputoController;
use App\Http\Controllers\CComputoBController;
use App\Http\Controllers\maestroController;
use App\Http\Controllers\algoritmoController;
use App\Http\Controllers\salaComputoController;
use App\Http\Controllers\registroBitacoraController;

use Illuminate\Support\Facades\Route;

use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

//ruta de la pagina principal
Route::get('/', function () {
    return view('home');
});
//Acceso al alumno para registrarlo
Route::get('/alumno/create', [registroBitacoraController::class, 'create'])->name('alumno.index');

// acceso a la vista para insertar datos del alumno
Route::post('/registro', [registroBitacoraController::class, 'store']);

// acceso a la ruta para el maestro del loggin
Route::get('/maestro', [maestroController::class, 'create'])->name('maestro.index');

// acceso para ver si existe el usuario en la base de datos del maestro
Route::post('/salaMaestro', [maestroController::class, 'validarClave'])->name('validar-clave');

// ruta para accesar a las salas de computo despues que se loguea el maestro
Route::get('/salaComputo', [salaComputoController::class, 'create'])
    ->name('salaComputo.index');



// acceso de la bitacora para registro del maestro
Route::get('/maestroBitacora', [maestroController::class, 'create1'])->name('bitacoraMaestro.index');
Route::post('/registroMaestro', [maestroController::class, 'store'])->name('store');

// Route::post('/cambiar_estado', [maestroController:: class,'cambiarEstado'])->name('cambiar_estado');
Route::post('/estado_div', [maestroController::class,'estado_div'])->name('estado_div');





//ruta de la pagina del centro computo alumno
Route::get('/compu', [CComputoController::class, 'create'])
    ->name('computo.index');
Route::get('/compuB', [CComputoBController::class, 'create'])
    ->name('computoB.index');

    // ruta para ver los estados del div
    Route::get('/obtener-estado', 'computadorasController@obtenerEstado');





    // purebas de arquitectura
    // acceso de la bitacora para registro del maestro
Route::get('/algoritmos', [algoritmoController::class, 'create'])->name('algoritmos.index');

