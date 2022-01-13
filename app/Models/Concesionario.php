<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concesionario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_concesionario',
        "descripcion"
    ];

    public function marcas()
    {
        return $this->hasOne('App\Models\Marca');
    }
}
