<?php

namespace Database\Seeders;

use App\Models\Coche;
use App\Models\Marca;
use Illuminate\Database\Seeder;

class Coches extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coche = new Coche;
        $coche->modelo = "c1";
        $coche->foto = "aaaa";
        $coche->descripcion = "to guapo";
        $coche->id_marca = Marca::find(1)->id;
        $coche->save();

        $coche2 = new Coche;
        $coche2->modelo = "c2";
        $coche2->foto = "eeeee";
        $coche2->descripcion = "to feo";
        $coche2->id_marca = Marca::find(2)->id;
        $coche2->save();
    }
}
