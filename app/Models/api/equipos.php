<?php

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;

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
