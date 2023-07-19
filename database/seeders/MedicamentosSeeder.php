<?php

namespace Database\Seeders;

use App\Models\Medicamentos;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MedicamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medicamentos::create(
            ['medicamento' => 'Aceptaminofen',
            'categoria_id' => 1],
        );
            Medicamentos::create(
                ['medicamento' => 'Ibuprofeno',
                'categoria_id' => 2],
            );
                Medicamentos::create(
                    ['medicamento' => 'Amoxacilina',
                    'categoria_id' => 3],
                );
                    Medicamentos::create(
                        ['medicamento' => 'Tramadol',
                        'categoria_id' => 4],


       );
        //
    }
}
