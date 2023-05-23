<?php

use App\Http\Controllers\ControllerSistema\CComputoController;
use App\Http\Controllers\ControllerSistema\CComputoBController;
use App\Http\Controllers\ControllerSistema\maestroController;
use App\Http\Controllers\ControllerSistema\salaComputoController;
use App\Http\Controllers\ControllerSistema\registroBitacoraController;
use App\Http\Controllers\ControllerSistema\computadorasController;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

 


use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

//ruta de la pagina principal
Route::get('/', function () {
    return view('home');
});
//Acceso al alumno para registrarlo
Route::get('/computo/create/equipo{id}{vista}', [registroBitacoraController::class, 'create'])->name('alumno.index');

// acceso a la vista para insertar datos del alumno
Route::post('/registro', [registroBitacoraController::class, 'store']);

// acceso a la ruta para el maestro del login
Route::get('/maestro', [maestroController::class, 'create'])->name('maestro.index');

// acceso a la ruta para el ADMINISTRADOR
Route::get('/administrador', [adminController::class, 'create'])->name('admin.index');
// acceso para las reservaciones
Route::get('/reserva', [adminController::class, 'index'])->name('admin.datos');
// Route::get('/pdf', [adminController::class, 'generarPDF'])->name('admin.generarpdf');
Route::get('/pdfDownload', [adminController::class, 'descargarPDF'])->name('admin.generarpdf');
// acceso para generar el pdf apartir de la fecha ingresada buscando fecha solo la vista 
Route::get('/buscarDatos', [adminController::class, 'vistaFecha'])->name('admin.buscarfecha');
Route::post('/mandarDatos', [adminController::class, 'buscarPorFecha'])
->name('admin.buscarfecha');

// ruta para cambiar los estados de las computadoras
Route::get('/cambiarEstados', [computadorasController::class, 'modificarEstados'])
    ->name('equipo.computadoras');
//   agregar el de actualizar el equipo 
Route::put('/equipo/computadoras/{id}', [computadorasController::class, 'update'])
->name('equipo.computadoras.update');


// *******************FIN ADMINISTRADOR 

// acceso para ver si existe el usuario en la base de datos del maestro
Route::post('/salaMaestro', [maestroController::class, 'validarClave'])->name('validar-clave');

// ruta para acceder a las salas de computo después que el maestro inicie sesión
Route::get('/seleccionAula', [salaComputoController::class, 'create'])
    ->name('seleccionAula.index');

// acceso de la bitacora para registro del maestro
Route::get('/BitacoraAula{Aula}', [maestroController::class, 'create1'])->name('bitacoraAula.index');
Route::post('/registroMaestro', [maestroController::class, 'store'])->name('store');

// Route::post('/cambiar_estado', [maestroController:: class,'cambiarEstado'])->name('cambiar_estado');
Route::post('/estado_div', [maestroController::class,'estado_div'])->name('estado_div');

//ruta de la pagina del centro computo alumno
Route::get('/computo', [CComputoController::class, 'create'])
    ->name('computo.index');
Route::get('/computoB', [CComputoBController::class, 'create'])
    ->name('computoB.index');

    // ruta para ver los estados del div
    Route::get('/obtener-estado', 'computadorasController@obtenerEstado');
// asi si agarra  la cponsulta
    Route::get('/obtenerestado', [computadorasController::class,'obtenerEstado']);