<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bitacora_maestro extends Model
{
    use HasFactory;

    protected $table = 'bitacora_maestro';

    //Defino las variables de la tabla de la base de datos
        protected $fillable = [
            'Grupo',
            'Materia',
            'NumAlumno',
            'HoraSalida',
            'estado'

        ];
}
