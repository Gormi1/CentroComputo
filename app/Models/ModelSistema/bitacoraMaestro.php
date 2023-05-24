<?php

namespace app\Models\ModelSistema;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bitacoraMaestro extends Model
{

    protected $table = 'bitacora_maestro';
    protected $fillable = [
        'Grupo',
        'Materia',
        'NumAlumno',
        'Carrera',
        'aula',
        'Day',
        'Month',
        'HoraEntrada',
        'created_at',
    ];
}
