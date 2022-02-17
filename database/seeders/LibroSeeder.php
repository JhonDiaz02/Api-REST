<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::create([
            'nombre' => 'Cuento',
            'idautor' => 1
        ]);
        Libro::create([
            'nombre' => 'Constitucion',
            'idautor' => 2
        ]);
    }
}
