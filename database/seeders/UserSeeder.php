<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
            $user -> documento = 1015066245;
            $user -> nombre = 'Juliana';
            $user -> apellido = 'Atehortua';
            $user -> telefono = 31624587;
            $user -> direccion = 'cr39 #86 A45';
            $user -> username = 'Juliana@MundoAnimal.com';
            $user -> password = Hash::make('1015066245');
            $user -> rol_id = 1;
        $user->save();
    }
}
