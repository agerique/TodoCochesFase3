<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_marca',
    ];

    public function coches()
    {
        return $this->hasMany('App\Models\Coche');
    }
    public function concesionarios()
    {
        return $this->hasOne('App\Models\Concesionario');
    }
}
