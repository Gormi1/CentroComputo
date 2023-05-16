<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\actualizarEquipoRequest;
use App\Http\Requests\guardarEquiposRequest;
use App\Models\api\equipos;
use Illuminate\Http\Request;

class equiposController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = equipos::all();
        return response()->json(['Computadoras' => $equipos]);  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(guardarEquiposRequest $request)
    {
        equipos::create($request->all());
        return response()->json([
            "respuesta" => true,
            "message" => 'Equipo guardado correctamente',
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $equipo = equipos::findOrFail($id);
            return response()->json([
                'respuesta' => true,
                'message' => 'Registro encontrado exitosamente',
                'equipo' => $equipo
            ],200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return response()->json([
                'respuesta' => false,
                'message' => 'El registro no existe'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(actualizarEquipoRequest $request, string $id)
    {
        $equipo = equipos::findOrFail($id);
        $equipo->update($request->all());
        return response()->json([
            "respuesta" => true,
            "message" => 'Equipo actualizado correctamente',
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $equipo = equipos::find($id);

        if ($equipo) {
            $equipo->delete();
            return response()->json([
                'respuesta' => true,
                'message' => 'El equipo ha sido eliminado correctamente'
            ]);
        } else {
            return response()->json([
                'respuesta' => false,
                'message' => 'El equipo no existe'
            ]);
        }
    }
}
