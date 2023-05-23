<?php

namespace app\Models\ModelSistema;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    protected $table = 'bitacoraalumno';

//Defino las variables de la tabla de la base de datos
    protected $fillable = [
        'Matricula',
        'Usuario',
         'NumEquipo', 
         'Aula',
        'HoraEntrada',
        'HoraSalida',

      
    ];
}
