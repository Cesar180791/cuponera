<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Heading;

class HeadingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Heading::create([
            'name'=>'Restaurantes',
            'description' => 'Comida y Bebida',
        ]);
        Heading::create([
            'name'=>'Hoteles',
            'description' => 'Hospedaje',
        ]);
          Heading::create([
            'name'=>'Talleres',
            'description' => 'Reparacion de autos motos etc..',
        ]);
           Heading::create([
            'name'=>'Entretenimiento',
            'description' => 'Cines y Deportes',
        ]);
        Heading::create([
            'name'=>'Turismo',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'Deportes',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'cine',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'beisball',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'anime',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'carros',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'motos',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'aviones',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'hoteles',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'pelotas',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'guantes',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'casas',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'terrenos',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
         Heading::create([
            'name'=>'alquileres',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
         Heading::create([
            'name'=>'familia',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'videojuegos',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);
        Heading::create([
            'name'=>'juegos de mesa',
            'description' => 'Ofertas en vuelos y excursiones',
        ]);

    }
}
