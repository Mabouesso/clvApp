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
    public function test_acceder_au_formulaire_d_edition($patient)
    {
        $response = $this->get('/patient/edit/$patient');
        $response->assertStatus(200);
    }
}
