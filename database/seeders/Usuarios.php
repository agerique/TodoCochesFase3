<?php

namespace Database\Seeders;

use App\Models\Rol;
use App\Models\Coche;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class Usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new Usuario;
        $usuario->nombre = "Julen";
        $usuario->apellidos = "Goñi";
        $usuario->email = "jgoniji20dw@ikzubirimanteo.com";
        $usuario->contrasena = "aA123456";
        $usuario->id_rol = Rol::find(1)->id;
        $usuario->save();

        $usuario2 = new Usuario;
        $usuario2->nombre = "Adur";
        $usuario2->apellidos = "Gerique";
        $usuario2->email = "ageriqueig21dw@ikzubirimanteo.com";
        $usuario2->contrasena = "aA123456";
        $usuario2->id_rol = Rol::find(1)->id;
        $usuario2->save();

        $usuario3 = new Usuario;
        $usuario3->nombre = "Erick";
        $usuario3->apellidos = "Ibanez";
        $usuario3->email = "eibanezri20dw@ikzubirimanteo.com";
        $usuario3->contrasena = "eeeee555";
        $usuario3->id_rol = Rol::find(1)->id;
        $usuario3->save();

        $usuario4 = new Usuario;
        $usuario4->nombre = "Administrador";
        $usuario4->apellidos = "Jefe";
        $usuario4->email = "administradortodocoches@gmail.com";
        $usuario4->contrasena = hash('sha256',"adminAJE123@");
        $usuario4->id_rol = Rol::find(3)->id;
        $usuario4->save();

        $coche_a = Coche::find(1);
        $coche_a2 = Coche::find(2);

        $usuario->coches()->attach($coche_a->id);
        $usuario2->coches()->attach($coche_a2->id);
    }
}
