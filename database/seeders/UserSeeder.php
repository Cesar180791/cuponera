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
            'name'=>'Leo Fabricio',
            'phone'=>'7520-8200',
            'address'=>'San Miguel',
            'dui'=>'04488759-2',
            'email' => 'mj@gmail.com',
            'profile'=>'Empresa',
            'status'=>'Active',
            'password'=>bcrypt('12345678'),
            'company_id'=> 1,
        ]);
           User::create([
            'name'=>'Mateo Alessandro',
            'phone'=>'7520-8700',
            'address'=>'San Miguel',
            'dui'=>'12345675-0',
            'email' => 'm@gmail.com',
            'profile'=>'Empresa',
            'status'=>'Active',
            'password'=>bcrypt('12345678'),
            'company_id'=> 2,
        ]);
    }
}
