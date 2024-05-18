<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $fillable = [
        'indicativo_telefono',
        'numero_telefono',
        'direccion_tienda',
        'numero_cuenta',
        'nombre_titular',
        'banco',
        'correodePagos',
        'tipo_cuenta',
    ];
}
