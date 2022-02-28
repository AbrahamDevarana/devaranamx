<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'description' => 'Home',
            'route_name' => '/',
        ]);
        Page::create([
            'description' => 'Quienes Somos',
            'route_name' => '/quienes-somos',
        ]);
        Page::create([
            'description' => 'Nuestra Trayectoria',
            'route_name' => '/nuestra-trayectoria',
        ]);
        Page::create([
            'description' => 'Nuestro Equpo',
            'route_name' => '/nuestro-equipo',
        ]);
        Page::create([
            'description' => 'Contacto',
            'route_name' => '/contacto',
        ]);
        Page::create([
            'description' => 'Aviso de Privacidad',
            'route_name' => '/aviso-de-privacidad',
        ]);
    }
}
