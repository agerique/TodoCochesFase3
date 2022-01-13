<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;

class Marcas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca = new Marca();
        $marca->nombre_marca = "ferrari";
        $marca->save();

        $marca2 = new Marca();
        $marca2->nombre_marca = "infinity";
        $marca2->save();
    }
}
