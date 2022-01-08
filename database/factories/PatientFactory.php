<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->firstName(),
            'prenom' => $this->faker->lastName(),
            'genre' => array_rand(['M', 'F'], 1),
            'dateNaissance'=>$this->dateTimeIntervalByAge(),
            'lieuNaissance' => $this->faker->city(),
            'adresse' => $this->faker->address(),
            'telephone1' => $this->faker->phoneNumber,
            'telephone2' => $this->faker->phoneNumber,
            'clan' => $this->faker->name(),
            'clanPere' => $this->faker->name(),
            'clanMere' => $this->faker->name(),
            'clanGrdPere' => $this->faker->name(),
            'ville' => $this->faker->city(),
            'pays' => $this->faker->country(),
            'village_id' => rand(1,20),
            'email' => $this->faker->unique()->safeEmail()
        ];
    }

    private function dateTimeIntervalByAge($minAge=10, $maxAge=90)
    {
        $minYear = (int) date('Y') - $minAge;
        $maxYear = (int) date('Y') - $maxAge;
        return $this->faker->dateTimeBetween( "$maxYear-12-31","$minYear-01-01")->format('Y-m-d');
    }
}
