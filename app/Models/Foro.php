<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foro extends Model
{
    protected $fillable = [
        'descripcion',
    ];

    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario');
    }
}
