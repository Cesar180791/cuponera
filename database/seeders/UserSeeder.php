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
            'phone'=>'75208200',
            'address'=>'San Miguel',
            'dui'=>'04488759-0',
            'email' => 'mj@gmail.com',
            'profile'=>'Admin',
            'status'=>'Active',
            'password'=>bcrypt('12345678'),
        ]);
           User::create([
            'name'=>'Mateo Alessandro',
            'phone'=>'75208700',
            'address'=>'San Miguel',
            'dui'=>'12345675-0',
            'email' => 'm@gmail.com',
            'profile'=>'Admin',
            'status'=>'Active',
            'password'=>bcrypt('12345678'),
        ]);
    }
}
