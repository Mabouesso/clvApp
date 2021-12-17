<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
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
