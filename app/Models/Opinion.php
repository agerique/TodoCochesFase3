<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
    ];

    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
        return $this->belongsTo('App\Models\Usuario', 'id_usuario');
    }
    public function coches()
    {
        return $this->belongsTo('App\Models\Coche');
    }
}
