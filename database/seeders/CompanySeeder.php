<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         company::create([
            'nameCompanies'=>'Pizza Hut',
            'nit' => '1217-180791-105-2',
            'nrc'=> 121345,
            'phone' => '22577777',
            'address' => 'San Salvador',
            'commission' => 10,
            'user_id' => 1
        ]);
         company::create([
            'nameCompanies'=>'Almacenes Siman',
            'nit' => '1217-180791-105-2',
            'nrc' => 136547,
            'phone' => '22577777',
            'address' => 'San Salvador',
            'commission' => 10,
            'user_id' => 2
        ]);
    }
}
