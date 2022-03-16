<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombre' => 'Ejemplo de nombre',
            'edad' => '18',
            'peso' => '60',
            'estatura' => '1.65',
            'masa_muscular' => '60',
            'grasa_visceral' => '50',
            'grasa_corporal' => '40',
            'edad_metabolica' => '16',
            'diferencia_de_la_edad' => '2',
            'medida_de_brazo' => '20',
            'medida_de_pecho' => '30',
            'medida_de_pierna' => '40',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
