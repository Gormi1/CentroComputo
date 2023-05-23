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
    public function show($Equipo, $Aula)
    {
        try {
            $equipo = equipos::where('Equipo', $Equipo)
            ->where('Aula', $Aula)
            ->firstOrFail();

            return response()->json([
                'respuesta' => true,
                'message' => 'Equipo encontrado exitosamente',
                'equipo' => $equipo
            ],200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return response()->json([
                'respuesta' => false,
                'message' => 'El Equipo no existe'
            ]);
        }
    }

    public function show2($Equipo, $Aula)
    {
        try {
            $equipo = equipos::where('Equipo', $Equipo)
            ->where('Aula', $Aula)
            ->firstOrFail();

            return response()->json([
                'respuesta' => true,
                'message' => 'Equipo encontrado exitosamente',
                'equipo' => $equipo
            ],200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return response()->json([
                'respuesta' => false,
                'message' => 'El Equipo no existe'
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(actualizarEquipoRequest $request, $Equipo, $Aula)
    {
        try {
            $equipo = equipos::where('Equipo', $Equipo)
                ->where('Aula', $Aula)
                ->firstOrFail();

            $equipo->estado = $request->input('Estado');
            $equipo->save();
        
            return response()->json([
                "respuesta" => true,
                "message" => 'Equipo actualizado correctamente',
            ], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return response()->json([
                "respuesta" => false,
                "message" => 'El Equipo no existe',
            ]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Equipo, $Aula)
    {
        try {
            $equipo = equipos::where('Equipo', $Equipo)
                ->where('Aula', $Aula)
                ->firstOrFail();

            $equipo->delete();

            return response()->json([
                "respuesta" => true,
                "message" => 'Equipo eliminado correctamente',
            ], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return response()->json([
                "respuesta" => false,
                "message" => 'El registro no existe',
            ]);
        }
    }
}
