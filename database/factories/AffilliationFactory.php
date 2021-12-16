<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AffilliationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nature = ['Pere', 'Mere', 'Frere', 'Soeur', 'Tante', 'Oncle',
        'Grand mère', 'Grand père', 'Enfant', 'Autre'];
        return [
            'nom'=>$this->faker->name,
            'nature'=>$nature[rand(0,8)],
            'patient_id'=>rand(1,20)
        ];
    }
}

