<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaysController extends Controller
{
    public function index()
    {
        return view('pays.index');
    }

    public function create()
    {
        return view('pays.create');
    }
}
