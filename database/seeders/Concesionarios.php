<?php

namespace Database\Seeders;

use App\Models\Concesionario;
use App\Models\Marca;
use Illuminate\Database\Seeder;

class Concesionarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $concesionario = new Concesionario;
        $concesionario->nombre_concesionario = "autos pepe";
        $concesionario->descripcion = "es verde";
        $concesionario->id_marca = Marca::find(1)->id;
        $concesionario->save();

        $concesionario2 = new Concesionario;
        $concesionario2->nombre_concesionario = "autos manolo";
        $concesionario2->descripcion = "es rojo";
        $concesionario2->id_marca = Marca::find(2)->id;
        $concesionario2->save();
    }
}
