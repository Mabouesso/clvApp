<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function index()
    {
        return view('patient.index');
    }


    public function create()
    {
        $pays=[];
        $villes=[];
        $villages=[];
        return view('patient.create',[
            'pays'=>$pays,
            'villes'=>$villes,
            'villages'=>$villages
            ]
        );
    }

    public function edit(Patient $patient)
    {
        return view('patient.edit', [
            'patient'=>$patient
        ]);
    }
}
