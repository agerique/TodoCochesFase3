<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Opinion;
use App\Models\Usuario;

class Opiniones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opinion = new Opinion;
        $opinion->descripcion = "No me ha gustado";
        $opinion->id_usuario = Usuario::find(1)->id;
        $opinion->save();

        $opinion2 = new Opinion;
        $opinion2->descripcion = "Me ha gustado";
        $opinion2->id_usuario = Usuario::find(2)->id;
        $opinion2->save();
    }
}
