<?php

namespace app\Models\ModelSistema;

use App\Models\api\equipos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class computadoras extends Model
{
    use HasFactory;
    protected $table = 'equipos';
    // protected $table = '';
    protected $fillable = [

        'Aula',
        'Estado',

    ];
    

}


