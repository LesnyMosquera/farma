<?php

namespace Database\Seeders;

use App\Models\Laboratorio;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LaboratorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     Laboratorio::create([
        'laboratorio' => 'MK',
        'descripcion' => 'Laboratorio Americano'
    ]);
    Laboratorio::create([
        'laboratorio' => 'Phartma S.A.',
        'descripcion' => 'Laboratorio Chino'
    ]);
    Laboratorio::create([
        'laboratorio' => 'Bayer',
        'descripcion' => 'Laboratorio Americano'
    ]);
    Laboratorio::create([
        'laboratorio' => 'Pfizer',
        'descripcion' => 'Laboratorio Peruano'
    ]);
    Laboratorio::create([
        'laboratorio' => 'Novartis',
        'descripcion' => 'Laboratorio Ruso'
    ]);
    Laboratorio::create([
        'laboratorio' => 'Roche',
        'descripcion' => 'Laboratorio Americano'
    ]);
    Laboratorio::create([
        'laboratorio' => 'Audifarna',
        'descripcion' => 'Laboratorio Colombia'
    ]);
    Laboratorio::create([
        'laboratorio' => 'Jansen',
        'descripcion' => 'Laboratorio Americano'
    ]);
    Laboratorio::create([
        'laboratorio' => 'Cilag',
        'descripcion' => 'Laboratorio Americano'
    ]);

    Laboratorio::create([
        'laboratorio' => 'Sinovac',
        'descripcion' => 'Laboratorio Americano'
    ]);










    }
}
