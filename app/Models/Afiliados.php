<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Afiliados extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'afiliados';

    // protected $fillable = [
    //     'nombre',
    //     'apellido_m',
    //     'apellido_p',
    //     'celular',
    //     'fecha_registro',
    //     'cod_medidor',
    //     'num_casa',
    //     'direccion'
    // ];

    protected $guarded = [];
    // protected $fechas = ['fecha_registro'];

    
}