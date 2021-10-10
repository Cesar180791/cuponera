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
            'codeCompany' => 'EMP202',
            'address' => 'San Salvador',
            'phoneCompany' => '7520-8200',
            'heading_id' => 2
        ]);
         company::create([
          'nameCompanies'=>'Almacenes Siman',
            'codeCompany' => 'EMP206',
            'address' => 'San Salvador',
            'phoneCompany' => '7520-8280',
            'heading_id' => 2
        ]);
    }
}
