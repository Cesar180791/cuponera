<?php

namespace Database\Seeders;

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
         User::create([
            'name'=>'Cesar Fabricio',
            'nameUser' => 'Fabricio2014',
            'email' => 'm@gmail.com',
            'profile'=>'ADMIN',
            'status'=>'ACTIVE',
            'password'=>bcrypt('12345678'),
        ]);
           User::create([
            'name'=>'Cesar Morales',
            'nameUser' => 'Fabricio2014',
            'email' => 'ma@gmail.com',
            'profile'=>'ADMIN',
            'status'=>'ACTIVE',
            'password'=>bcrypt('12345678'),
        ]);
    }
}
