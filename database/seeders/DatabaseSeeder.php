<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Village::factory(50)->create();
        \App\Models\Patient::factory(1000)->create();
        \App\Models\Affilliation::factory(100)->create();
        \App\Models\Consultation::factory(2050)->create();
    }
}
