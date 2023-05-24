<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaComputo extends Model
{
    protected $table = 'sala_computo';
    // protected $table = 'bitacora_maestro';
    protected $fillable = [
        'Equipo',
        'Aula',
        'Estado'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
