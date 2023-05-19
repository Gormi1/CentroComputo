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
<<<<<<< HEAD:app/Models/ModelSistema/bitacora.php
        'HoraEntrada',
        'HoraSalida',
        'NumEquipo',
        'Aula',
=======
        'Num-Pc',
        'Sala',

>>>>>>> 79d992eb8240a595553e1a02e74dd2e6d82d400e:app/Models/bitacora.php
    ];
}
