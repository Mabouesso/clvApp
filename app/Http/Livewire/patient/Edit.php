<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;

class Edit extends Component
{
    public $patient = [];

    public function render()
    {
        return view('livewire.patient.edit');
    }

    public function update()
    {
        $this->validate([
            'newPatient.genre' =>'required',
            'newPatient.nom' =>'required',
            'newPatient.dateNaissance' =>'required',
            'newPatient.lieuNaissance' =>'required',
            'newPatient.adresse' =>'required',
            'newPatient.telephone1' => 'required|unique:patients,telephone1',
            'newPatient.email' => 'unique:patients,email',
            'newPatient.pays' =>'required',
            'newPatient.ville' =>'required',
            'newPatient.village_id' =>'required',
            ]);

        Patient::create($this->newPatient);

    }

}
