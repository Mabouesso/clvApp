<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembreController extends Controller
{

    public function create()
    {
        return view('membres.create');
    }
}
