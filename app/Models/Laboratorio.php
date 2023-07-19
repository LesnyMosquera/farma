<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{


    public function medicamento(){
        return $this->hasMany('Medicamento::class');
    }
    use HasFactory;
    protected $fillable = [
        'laboratorio',
        'descripcion',
    ];
}
