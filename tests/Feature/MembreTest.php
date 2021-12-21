<?php

namespace Tests\Feature;

use AssertionError;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MembreTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_acceder_au_formulaire_ajout_d_un_membre()
    {
        // preparer les prérequis
        // action
        // Assertions

        $response = $this->get('/membre/create');

        $response->assertStatus(200);
        $response->assertViewIs('membres.create');
    }
}
