<?php

namespace Tests\Feature;

use App\Http\Livewire\PatientComponent;
use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PatientcreatedTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
     /** @test  */
    public function acceder_au_formulaire_ajout_d_un_patient()
    {
        // preparation (les prerequis pour tester)
        // action
        // assertions
        $response = $this->get('/patient/create');
        $response->assertStatus(200);
        $response->assertViewIs("patients.create");
    }

    /** @test  */
    public function les_informations_requises_pour_l_ajout_d_un_patient_ont_ete_envoyees_a_la_vue()
    {
        $response = $this->get('/patient/create');
        $response->assertViewHasAll(["villes", "pays", "villages"]);
    }

    /** @test  */
    public function on_peut_ajouter_un_patient()
    {
        $village = \App\Models\Village::factory()->create();
        Livewire::test(PatientComponent::class)
        ->set('newPatient.nom', 'Barbara')
        ->set('newPatient.genre', '0')
        ->set('newPatient.dateNaissance', '1974/12/13')
        ->set('newPatient.lieuNaissance', 'Brazzaville')
        ->set('newPatient.adresse', '67 bis rue Nkouka Batéké')
        ->set('newPatient.telephone1', '035000200')
        ->set('newPatient.pays', 'Congo')
        ->set('newPatient.ville', 'Mvoungouti')
        ->set('newPatient.village_id', '1')
        ->call('create');
        $this->assertTrue(Patient::whereNom('Barbara')->exists());
    }

    /** @test  */
    public function a_l_ajout_d_un_patient_le_nom_est_requis()
    {
        \App\Models\Village::factory()->create();
        Livewire::test(PatientComponent::class)
        ->set('newPatient.nom', '')
        ->set('newPatient.genre', '0')
        ->set('newPatient.dateNaissance', '1974/12/13')
        ->set('newPatient.lieuNaissance', 'Brazzaville')
        ->set('newPatient.adresse', '67 bis rue Nkouka Batéké')
        ->set('newPatient.telephone1', '035000200')
        ->set('newPatient.pays', 'Congo')
        ->set('newPatient.ville', 'Mvoungouti')
        ->set('newPatient.village_id', '1')
        ->call('create')
        ->assertHasErrors(['newPatient.nom' => 'required']);
    }

    /** @test  */
    public function a_l_ajout_d_un_patient_le_genre_est_requis()
    {
        \App\Models\Village::factory()->create();
        Livewire::test(PatientComponent::class)
        ->set('newPatient.nom', 'Barbara')
        ->set('newPatient.genre', '')
        ->set('newPatient.dateNaissance', '1974/12/13')
        ->set('newPatient.lieuNaissance', 'Brazzaville')
        ->set('newPatient.adresse', '67 bis rue Nkouka Batéké')
        ->set('newPatient.telephone1', '035000200')
        ->set('newPatient.pays', 'Congo')
        ->set('newPatient.ville', 'Mvoungouti')
        ->set('newPatient.village_id', '1')
        ->call('create')
        ->assertHasErrors(['newPatient.genre' => 'required']);
    }

    /** @test  */
    public function a_l_ajout_d_un_patient_la_date_Naissance_est_requise()
    {
        \App\Models\Village::factory()->create();
        Livewire::test(PatientComponent::class)
        ->set('newPatient.nom', 'Barbara')
        ->set('newPatient.genre', '0')
        ->set('newPatient.dateNaissance', '')
        ->set('newPatient.lieuNaissance', 'Brazzaville')
        ->set('newPatient.adresse', '67 bis rue Nkouka Batéké')
        ->set('newPatient.telephone1', '035000200')
        ->set('newPatient.pays', 'Congo')
        ->set('newPatient.ville', 'Mvoungouti')
        ->set('newPatient.village_id', '1')
        ->call('create')
        ->assertHasErrors(['newPatient.dateNaissance' => 'required']);
    }

    /** @test  */
    public function a_l_ajout_d_un_patient_le_lieu_de_naissance_est_requis()
    {
        \App\Models\Village::factory()->create();
        Livewire::test(PatientComponent::class)
        ->set('newPatient.nom', 'Barbara')
        ->set('newPatient.genre', '0')
        ->set('newPatient.dateNaissance', '1974/12/13')
        ->set('newPatient.lieuNaissance', '')
        ->set('newPatient.adresse', '67 bis rue Nkouka Batéké')
        ->set('newPatient.telephone1', '035000200')
        ->set('newPatient.pays', 'Congo')
        ->set('newPatient.ville', 'Mvoungouti')
        ->set('newPatient.village_id', '1')
        ->call('create')
        ->assertHasErrors(['newPatient.lieuNaissance' => 'required']);
    }

    /** @test  */
    public function a_l_ajout_d_un_patient_l_adresse_est_requise()
    {
        \App\Models\Village::factory()->create();
        Livewire::test(PatientComponent::class)
        ->set('newPatient.nom', 'Barbara')
        ->set('newPatient.genre', '0')
        ->set('newPatient.dateNaissance', '1974/12/13')
        ->set('newPatient.lieuNaissance', 'Brazzaville')
        ->set('newPatient.adresse', '')
        ->set('newPatient.telephone1', '035000200')
        ->set('newPatient.pays', 'Congo')
        ->set('newPatient.ville', 'Mvoungouti')
        ->set('newPatient.village_id', '1')
        ->call('create')
        ->assertHasErrors(['newPatient.adresse' => 'required']);
    }

    /** @test  */
    public function a_l_ajout_d_un_patient_la_ville_est_requise()
    {
        \App\Models\Village::factory()->create();
        Livewire::test(PatientComponent::class)
        ->set('newPatient.nom', 'Barbara')
        ->set('newPatient.genre', '0')
        ->set('newPatient.dateNaissance', '1974/12/13')
        ->set('newPatient.lieuNaissance', 'Brazzaville')
        ->set('newPatient.adresse', '67 bis rue Nkouka Batéké')
        ->set('newPatient.telephone1', '035000200')
        ->set('newPatient.pays', 'Congo')
        ->set('newPatient.ville', '')
        ->set('newPatient.village_id', '1')
        ->call('create')
        ->assertHasErrors(['newPatient.ville' => 'required']);
    }

    /** @test  */
    public function a_l_ajout_d_un_patient_le_pays_est_requis()
    {
        \App\Models\Village::factory()->create();
        Livewire::test(PatientComponent::class)
        ->set('newPatient.nom', 'Barbara')
        ->set('newPatient.genre', '0')
        ->set('newPatient.dateNaissance', '1974/12/13')
        ->set('newPatient.lieuNaissance', 'Brazzaville')
        ->set('newPatient.adresse', '67 bis rue Nkouka Batéké')
        ->set('newPatient.telephone1', '035000200')
        ->set('newPatient.pays', '')
        ->set('newPatient.ville', 'Mvoungouti')
        ->set('newPatient.village_id', '1')
        ->call('create')
        ->assertHasErrors(['newPatient.pays' => 'required']);
    }

    /** @test  */
    public function a_l_ajout_d_un_patient_le_village_est_requis()
    {
        \App\Models\Village::factory()->create();
        Livewire::test(PatientComponent::class)
        ->set('newPatient.nom', 'Barbara')
        ->set('newPatient.genre', '0')
        ->set('newPatient.dateNaissance', '1974/12/13')
        ->set('newPatient.lieuNaissance', 'Brazzaville')
        ->set('newPatient.adresse', '67 bis rue Nkouka Batéké')
        ->set('newPatient.telephone1', '035000200')
        ->set('newPatient.pays', 'Congo')
        ->set('newPatient.ville', 'Mvoungouti')
        ->set('newPatient.village_id', '')
        ->call('create')
        ->assertHasErrors(['newPatient.village_id' => 'required']);
    }

    /** @test  */
    public function a_l_ajout_d_un_patient_le_telephone_est_requis()
    {
        \App\Models\Village::factory()->create();
        Livewire::test(PatientComponent::class)
        ->set('newPatient.nom', 'Barbara')
        ->set('newPatient.genre', '0')
        ->set('newPatient.dateNaissance', '1974/12/13')
        ->set('newPatient.lieuNaissance', 'Brazzaville')
        ->set('newPatient.adresse', '67 bis rue Nkouka Batéké')
        ->set('newPatient.telephone1', '')
        ->set('newPatient.pays', 'Congo')
        ->set('newPatient.ville', 'Mvoungouti')
        ->set('newPatient.village_id', '1')
        ->call('create')
        ->assertHasErrors(['newPatient.telephone1' => 'required']);
    }

    public function test_a_l_ajout_d_un_patient_le_telephone_doit_être_unique()
    {
        \App\Models\Village::factory()->create();
        $patient = \App\Models\Patient::factory()->create([
            "telephone1" => "1234567890"
        ]);
        $this->withoutExceptionHandling();
        Livewire::test(PatientComponent::class)
        ->set('newPatient.nom', 'Barbara')
        ->set('newPatient.genre', '0')
        ->set('newPatient.dateNaissance', '1974/12/13')
        ->set('newPatient.lieuNaissance', 'Brazzaville')
        ->set('newPatient.adresse', '67 bis rue Nkouka Batéké')
        ->set('newPatient.telephone1', '1234567890')
        ->set('newPatient.pays', 'Congo')
        ->set('newPatient.ville', 'Mvoungouti')
        ->set('newPatient.village_id', '1')
        ->call('create')
        ->assertHasErrors(['newPatient.telephone1' => 'unique']);
        $this->withoutExceptionHandling();
    }
}
