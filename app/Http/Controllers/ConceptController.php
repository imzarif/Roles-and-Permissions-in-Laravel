<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConceptController extends Controller
{
    public function index()
    {
        return view('layouts.partners.cpconcept');
    }

    public function create()
    {
        return view('layouts.partners.create');
    }
}
