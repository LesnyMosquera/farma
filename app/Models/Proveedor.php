<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public $timestamps = true;

    protected $table = 'proveedors';
    protected $fillable  = [

        'nit',
        'nombre',

        'genero',
        'direccionp',
        'telefono',
        'email',
        'pais',
        'departamento',
        'municipio'

];
    use HasFactory;
}
