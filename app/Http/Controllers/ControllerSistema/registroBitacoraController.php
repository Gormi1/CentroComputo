<?php
namespace App\Http\Controllers\ControllerSistema;

use App\Http\Controllers\Controller;
use App\Models\ModelSistema\bitacora;
use Illuminate\Http\Request;

class registroBitacoraController extends Controller
{
    public function create($id, $vista)
    {
        return view('alumno.alumno', ['id' => $id, 'vista' => $vista]);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'Matricula' => 'required',
                'Usuario' => 'required',
                'HoraEntrada' => 'required',
                'HoraSalida' => 'required',
                'NumEquipo' => 'required',
                'Aula' => 'required',
            ]);
            
            // Si los datos son validados, continúa con el procesamiento de los datos
            $registro = new bitacora;
            $matricula = $validatedData['Matricula'];
            $registro->Matricula =  $matricula;
            $registro->Usuario = $validatedData['Usuario'];
            $registro->HoraEntrada =$validatedData['HoraEntrada'];
            $registro->HoraSalida =$validatedData['HoraSalida'];
            $registro->NumEquipo = $validatedData['NumEquipo'];
            $aula =  $validatedData['Aula'];
            $registro->Aula = $aula;
            // Comprobamos si el valor del campo de acceso tiene la estructura "xx-xx-xxxx" y solo contiene números
            
if (preg_match('/^\d{2}-\d{2}-\d{4}$/', $matricula)) {
    // Si tiene la estructura correcta y solo contiene números, podemos permitir el acceso

    // Validar que HoraEntrada sea menor que HoraSalida
    if ($validatedData['HoraEntrada'] < $validatedData['HoraSalida']) {
        // Si HoraEntrada es menor que HoraSalida, permitir el acceso y continuar con el proceso

        // Resto del código...

        // además de guardar los datos dentro de la base de datos
        $registro->save();

        // y redirigir al usuario a la página anterior
        return redirect('/')->with('success', 'Tu equipo ha sido apartado y seleccionado. ¡Ve a tu lugar!');
    } else {
        // Si HoraEntrada no es menor que HoraSalida, mostrar un mensaje de error
        $msg = 'La Hora de entrada debe ser menor a la Hora de salida.';
        $error = 'error';
        return back()->with($error, $msg);
    }
} else {
    // Si no tiene la estructura correcta o contiene caracteres que no son numéricos, mostramos un mensaje de error
    $msg = 'Ingrese la matricula en este formato (00-00-0000)';
    $error = 'error';
    return back()->with($error, $msg);
}

            
        // return redirect('/')->with('success', 'Tu equipo ha sido apartado y seleccionado valla a su lugar');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Mostrar una alerta al usuario indicando que se requieren los campos
            return back()->with('error', 'Los campos Matricula y Usuario son requeridos.');
        }
    }
}
