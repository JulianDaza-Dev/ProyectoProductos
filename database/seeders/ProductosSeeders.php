<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre'=> 'MOTOS',
            'descripcion'=> 'motoooooooooooos'
        ]);
        Categoria::create([
            'nombre'=> 'CARROOOOOS',
            'descripcion'=> 'CAROOOOOOOOOOOOOS'
        ]);
    }
}
