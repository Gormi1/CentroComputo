<?php

namespace App\Http\Controllers\ControllerSistema;

use App\Http\Controllers\Controller;
use App\Models\ModelSistema\computadoras;
use Illuminate\Http\Request;

class computadorasController extends Controller
{
    public function obtenerEstado()
    {
        $estado = computadoras::all();
        return response()->json($estado);
    }

    public function modificarEstados()
    {
        $datos = computadoras::all();
        return view('equipo.computadoras', compact('datos'));
    }

    public function update(Request $request, $id)
    {
        $dato = computadoras::findOrFail($id);
        $encontrado = $dato->Estado = $request->estado;
        $guardar = $dato->save();
        if ($guardar) {
            return redirect('/cambiarEstados')->with('success', 'El estado se ha actualizado correctamente.');
        }
        // Opcionalmente, puedes agregar un mensaje de éxito o redireccionar a otra página
        // return redirect()->back()->with('success', 'El estado se ha actualizado correctamente.');

    }

}