<?php

namespace Database\Factories;

use App\Models\Medicamentos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicamentos>
 */
class MedicamentosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Medicamentos::class;
    public function definition(): array
    {
        return [
            //
        ];
    }
}
