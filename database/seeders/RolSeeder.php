<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol=new Rol();
        $rol->descripcion='Administrador';
        $rol->save();

        $rol=new Rol();
        $rol->descripcion='Cliente';
        $rol->save();

        $rol=new Rol();
        $rol->descripcion='Empleado';
        $rol->save();
    }
}
