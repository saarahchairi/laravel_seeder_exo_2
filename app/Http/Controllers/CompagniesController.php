<?php

namespace App\Http\Controllers;

use App\Models\Compagnies;
use Illuminate\Http\Request;

class CompagniesController extends Controller
{
    public function index(){
        $allCompagnies = Compagnies::all();
        return view('allCompagnies', compact("allCompagnies"));
    }

    public function show($id){
        $id_show = Compagnies::find($id);
        return view('pages.editCompagnie', compact('id_show'));
    }

    public function update(Request $request, $id){
        $editable = Compagnies::find($id);
        $editable->nom = $request->nom;
        $editable->adresse = $request->adresse;
        $editable->codePostal = $request->codePostal;
        $editable->numeroPorte = $request->numeroPorte;
        $editable->telephone = $request->telephone;
        $editable->email = $request->email;
        $editable->nomPerso = $request->nomPerso;
        $editable->prenomPerso = $request->prenomPerso;
        $editable->img = $request->img;
        $editable->save();
        return redirect('/');
    }

    public function destroy($id){
        $destroy = Compagnies::find($id);
        $destroy->delete();
        return redirect()->back();
    }

}
