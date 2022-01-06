<?php

namespace App\Http\Livewire;

use App\Models\Pays;
use Livewire\Component;


class PaysComponent extends Component
{


    public $nom ="";

    public function render()
    {
        return view('livewire.pays.create');
    }

    public function create()
    {
        $validate = $this->validate([
            'nom'=>'required'
        ]);

        Pays::create($validate);
    }
}
