<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   

     public function run()
     {
         DB::table('vehiculos')->insert([
             [
                 'precio_mes' => 5000,
                 'autonomia' => 600,
                 'duracion' => 30,
                 'requerimiento' => 'Licencia de conducir'
             ],
             [
                 'precio_mes' => 7000,
                 'autonomia' => 800,
                 'duracion' => 45,
                 'requerimiento' => 'Licencia de conducir'
             ]
         ]);
     }
     

}
