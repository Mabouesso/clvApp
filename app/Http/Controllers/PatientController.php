<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function index()
    {
        return view('patients.index');
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
