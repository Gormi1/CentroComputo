<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maestro extends Model
{
    protected $table = 'maestro';
    // protected $table = 'bitacora_maestro';
    protected $fillable = [

        'Clave',

    ];
}
