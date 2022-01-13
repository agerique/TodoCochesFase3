<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;
    protected $fillable = [
        'modelo',
        "foto",
        "descripcion"
    ];

    public function marcas()
    {
        return $this->belongsTo('App\Models\Marca');
        return $this->belongsTo('App\Models\Marca', 'id_marca');
    }
    public function usuarios()
    {
        return $this->belongsToMany('App\Models\Usuario');
    }
    public function opiniones()
    {
        return $this->hasMany('App\Models\Opinion');
    }
}
