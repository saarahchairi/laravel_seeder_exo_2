<?php

namespace App\Http\Controllers;

use App\Models\Compagnies;
use Illuminate\Http\Request;

class NewCompagnieController extends Controller
{
    public function index(){
        return view('pages.newCompagnie');
    }

    public function store(Request $request){
        $store = new Compagnies;
        $store->nom = $request->nom;
        $store->adresse = $request->adresse;
        $store->codePostal = $request->codePostal;
        $store->numeroPorte = $request->numeroPorte;
        $store->telephone = $request->telephone;
        $store->email = $request->email;
        $store->nomPerso = $request->nomPerso;
        $store->prenomPerso = $request->prenomPerso;
        $store->img = $request->img;
        $store->save();
        return redirect('/');
    }
}
