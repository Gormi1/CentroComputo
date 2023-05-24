<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\actualizarSalasRequest;
use App\Http\Requests\guardarSalasRequest;
use App\Models\SalaComputo;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SalaComputo::all();  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(guardarSalasRequest $request)
    {
        SalaComputo::create($request->all());
        return response()->json([
            "respuesta" => true,
            "message" => 'Equipo guardado correctamente',
        ],200);
    }

    /**
     * Display the specified resource.
     */
    public function show($Aula)
    {
        try {
            $Aulas = SalaComputo::where('Aula', $Aula)
            ->firstOrFail();

            return response()->json([
                'respuesta' => true,
                'message' => 'Equipo encontrado exitosamente',
                'equipo' => $Aulas
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
    public function update(actualizarSalasRequest $request, $Aula)
    {
        try {
            $Aulas = SalaComputo::where('Aula', $Aula)->firstOrFail();

            $Aulas->Estado = $request->input('Estado');
            $Aulas->save();
        
            return response()->json([
                "respuesta" => true,
                "message" => 'Aula actualizada correctamente',
            ], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return response()->json([
                "respuesta" => false,
                "message" => 'El Aula no existe',
            ]);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Aula)
    {
        try {
            $Aulas = SalaComputo::where('Aula', $Aula)
                ->firstOrFail();

            $Aulas->delete();

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
