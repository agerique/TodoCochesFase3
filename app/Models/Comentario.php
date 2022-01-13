<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public function usuarios()
    {
        return $this->belongsTo('App\Models\Usuario');
    }
    public function comentarios()
    {
        return $this->belongsTo('App\Models\Comentario');
    }
    

    protected $fillable = [
        'descripcion',
    ];
}
