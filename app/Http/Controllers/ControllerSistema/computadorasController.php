<?php

namespace App\Http\Controllers\ControllerSistema;

use App\Http\Controllers\Controller;
use App\Models\ModelSistema\computadoras;
use Illuminate\Http\Request;

class computadorasController extends Controller
{
    public function obtenerEstado() {
        $estado = computadoras::all();
        return response()->json($estado);
    }
    
    public function modificarEstados() {
        $datos= computadoras::all();
        return view('equipo.computadoras', compact('datos'));
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'estado' => 'required|string|max:255',
    ]);

    $registro = computadoras::findOrFail($id);
    $registro->Estado = $request->estado;
    $registro->save();

    return redirect()->back()->with('success', 'Estado actualizado exitosamente');
}
}
