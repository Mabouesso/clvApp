<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dateConsultation'=>$this->faker->date,
            'maladie'=>$this->faker->text(),
            'diagnostic'=>$this->faker->text(),
            'recommandations'=>$this->faker->text(),
            'patient_id'=>rand(1,40)
        ];
    }
}
