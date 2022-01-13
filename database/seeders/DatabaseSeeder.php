<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Roles::class);
        $this->call(Marcas::class);
        $this->call(Coches::class);
        $this->call(Usuarios::class);
        $this->call(Comentarios::class);
        $this->call(Foros::class);
        $this->call(Opiniones::class);
        $this->call(Concesionarios::class);
    }
}
