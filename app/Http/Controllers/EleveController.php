<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Eleve;
use Illuminate\Http\Request;


class EleveController extends Controller
{
    public function index(){
        $valeurs = Classe::all();
        return view ("login", compact('values'));
    }

    public function store(Request $request)
    {
        $eleve = new Eleve();
        $eleve->nom = $request->nom;
        $eleve->classe_od = $request->classe_id;
        $eleve->adressIP = $_SERVER['REMOTE_ADOR'];
        $eleve->save();
    }
}
