<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;


class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Rol;
        $rol->nombre_rol = "Cliente estandar";
        $rol->save();

        $rol2 = new Rol;
        $rol2->nombre_rol = "Cliente vip";
        $rol2->save();

        $rol3 = new Rol;
        $rol3->nombre_rol = "Administrador";
        $rol3->save();


    }
}
