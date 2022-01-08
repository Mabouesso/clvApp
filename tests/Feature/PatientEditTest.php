<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PatientEditTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_acceder_au_formulaire_d_edition()
    {
        \App\Models\Village::factory()->create();
        $patient = \App\Models\Patient::factory()->create([
            "village_id"=>1
        ]);
        $response = $this->get("/patient/edit/".$patient->id);
        $response->assertStatus(200);
    }
    public function test_le_patient_selectionne_pour_l_edition_correspond_bien_a_celui_renvoyer_par_la_vue()
    {
        \App\Models\Village::factory()->create();
        $patient = \App\Models\Patient::factory()->create([
            "village_id"=>1
        ]);
        $response = $this->get("/patient/edit/".$patient->id);
        $response->assertViewHas("patient", $patient);
    }
    public function test_on_mettre_a_jour_les_information_d_un_patient()
    {
        \App\Models\Village::factory()->create();
        $patient = \App\Models\Patient::factory()->create([
            "village_id"=>1
        ]);
    }

}
