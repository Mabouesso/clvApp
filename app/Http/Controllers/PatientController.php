<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', [
            'patients'=>$patients
        ]);
    }


    public function create()
    {
        $pays=[];
        $villes=[];
        $villages=[];
        return view('patients.create',[
            'pays'=>$pays,
            'villes'=>$villes,
            'villages'=>$villages
        ]
    );
    }
}
