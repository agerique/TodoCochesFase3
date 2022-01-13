<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function roles()
    {
        return $this->belongsTo('App\Models\Rol');
        return $this->belongsTo('App\Models\Rol', 'id_rol');
    }
    public function comentarios()
    {
       return $this->hasMany('App\Models\Comentario'); 
    }
    public function coches()
    {
       return $this->belongsToMany('App\Models\Coche'); 
    }
    public function opiniones()
    {
        return $this->hasMany('App\Models\Opinion');
    }

    protected $fillable = [
        'nombre',
        'apellidos',
        'email',
        'contrasena',
    ];

    /*
    protected $hidden = [
        'contrasena',
        'remember_token',
    ];
    */
}
