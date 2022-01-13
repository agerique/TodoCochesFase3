<?php

namespace Database\Seeders;

use App\Models\Comentario;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class Comentarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comentario = new Comentario;
        $comentario->descripcion = "No me ha gustado";
        $comentario->id_usuario = Usuario::find(1)->id;
        $comentario->save();

        $comentario2 = new Comentario;
        $comentario2->descripcion = "Me ha gustado";
        $comentario2->id_usuario = Usuario::find(2)->id;
        $comentario2->save();
    }
}
