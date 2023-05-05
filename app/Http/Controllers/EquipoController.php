<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipoController extends Controller
{
     // vista para de la bitácora del alumno
    
    public function create($id)
    {
        return view('alumno.alumno', ['id' => $id]);
       // return $id;
    }
}
