<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=>'Admin',
            'description' => 'Administrador de Sistema'
        ]);
         Role::create([
            'name'=>'Empresa',
            'description' => 'Empresas Registradas al sistema'
        ]);
          Role::create([
            'name'=>'Clientes',
            'description' => 'Clientes Registrados al sistema'
        ]);
    }
}
