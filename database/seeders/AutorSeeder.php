<?php

namespace Database\Seeders;

use App\Models\Autor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    
    public function run()
    {
        Autor::create([
            'nombre' => 'Test',
            'fecha' => 'Test'
        ]);
        Autor::create([
            'nombre' => 'Juan',
            'fecha' => '100123045'
        ]);
    }
}
