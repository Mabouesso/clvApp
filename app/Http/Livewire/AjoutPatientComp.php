<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AjoutPatientComp extends Component
{

    public $pays = [];
    public $newPatient=[];
    public $editPatient = [];
    public $selectedPays = null;
    public $selectedVille = null;
    public $selectedVillage = null;
    public $selectedPatient;


    public function render()
    {
        return view('livewire.patients.ajout-patient-comp');
    }


    public function goToAddPatient()
    {
// dd('ok');
        $this->dispatchBrowserEvent("showModal", []);
    }
}
