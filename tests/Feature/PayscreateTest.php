<?php

namespace Tests\Feature;
use App\Http\Livewire\PaysComponent;
use App\Models\Pays;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PayscreateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     use RefreshDatabase;

     /** @test  */
    public function acceder_au_formulaire_ajout_d_un_pays()
    {
        $response = $this->get('/pays/create');
        $response->assertStatus(200);
        $response->assertViewIs("pays.create");
    }

    /** @test  */
    public function on_peut_ajouter_un_pays()
    {
        Livewire::test(PaysComponent::class)
        ->set('nom', 'Koôngo')
        ->call('create');
        $this->assertTrue(Pays::whereNom('Koôngo')->exists());
    }
    /** @test  */
    public function a_l_ajout_d_un_pays_le_nom_est_unique()
    {
        $pays = \App\Models\Pays::factory()->create([
            "nom"=>"Malabo"
        ]);
        Livewire::test(PaysComponent::class)
        ->set('nom', 'Malabo')
        ->call('create')
        ->assertHasErrors(["nom"=>"unique"]);
        $this->withoutExceptionHandling();
    }
}
