<?php
namespace App\Http\Controllers;

use App\Models\bitacora;
use Illuminate\Http\Request;



class registroBitacoraController extends Controller
{

    public function create()
    {

        return view('alumno.alumno');
    }


    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'Matricula' => 'required',
                'Usuario' => 'required',
            ]);

            // Si los datos son validados, continúa con el procesamiento de los datos
            $registro = new bitacora;
            $matricula = $validatedData['Matricula'];
            $registro->Matricula =  $matricula;
            $registro->Usuario = $validatedData['Usuario'];
            // Comprobamos si el valor del campo de acceso tiene la estructura "xx-xx-xxxx" y solo contiene números
            if (preg_match('/^\d{2}-\d{2}-\d{4}$/', $matricula)) {
                    // Si tiene la estructura correcta y solo contiene números, podemos permitir el acceso
                    // además de guardar los datos dentro de la bases de datos
                    $registro->save();
                    // y redirige al usuario a la página anterior
                    return redirect('/')->with('success', 'Tu equpo ha sido apartado y seleccionado vaya a su lugar');

                } else {
                    // Si no tiene la estructura correcta o contiene caracteres que no son numéricos, mostramos un mensaje de error
                    $msg = 'ingrese la matricuala en este formato (00-00-0000)';
                    $error = 'error';
                    return back()->with($error, $msg);
                }

        // return redirect('/')->with('success', 'Tu equpo ha sido apartado y seleccionado valla a su lugar');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Mostrar una alerta al usuario indicando que se requieren los campos
            return back()->with('error', 'Los campos Matricula y Usuario son requeridos.');
        }
    }
}
