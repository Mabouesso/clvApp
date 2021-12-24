<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MembreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dateAdhesion'=>$this->faker->date,
            'fraisAdhesion'=>$this->faker->bankAccountNumber(),
            'livretElu'=>array_rand([0,1], 1),
            'brochureElu'=>array_rand([0,1], 1),
            'patient_id'=>rand(1,20)

        ];
    }
}
