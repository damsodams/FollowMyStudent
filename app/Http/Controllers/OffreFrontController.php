<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;

class OffreFrontController extends Controller
{
    public function index()
    {
        $offres = Offre::all();
       
        return view('front/offre.index', compact('offres'));

    }
    public function show(Offre $offre)
    {
        return view('front/offre.show', compact('offre'));
    }
}