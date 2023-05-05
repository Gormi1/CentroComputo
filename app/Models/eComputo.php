<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eComputo extends Model
{
    use HasFactory;
    protected $table = 'computo';
 
    //Defino las variables de la tabla de la base de datos
        protected $fillable = [
            'id',
            'nombreEquipo',
            'estado',
            'Aula',
            'numEquipo',
        ];

}
