<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Juan Perez',
                'dni' => '12345678'
            ],
            [
                'nombre' => 'Maria Gomez',
                'dni' => '87654321'
            ]
        ]);
    }
    
}
