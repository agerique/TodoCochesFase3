<?php

namespace Database\Seeders;

use App\Models\Foro;
use Illuminate\Database\Seeder;

class Foros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foro = new Foro;
        $foro->descripcion = "foro1";
        $foro->save();

        $foro2 = new Foro;
        $foro2->descripcion = "foro2";
        $foro2->save();
    }
}
