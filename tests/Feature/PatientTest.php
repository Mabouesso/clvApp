<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PatientTest extends TestCase
{


    public function test_acceder_au_formulaire_ajout_d_un_patient()
    {
        // prepartion (les prerequis pour tester)
        // action
        // assertions

        $response = $this->get('/patient/create');

        $response->assertStatus(200);
        $response->assertViewIs("patients.create");
    }

    public function test_les_informations_requises_pour_l_ajout_d_un_patient_ont_ete_envoyees_a_la_vue()
    {

        $response = $this->get('/patient/create');

        $response->assertViewHasAll(["villes", "pays", "villages"]);
    }
}
d:
