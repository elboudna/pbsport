<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeController extends Controller
{
    //

    public function index()
    {
        $equipes = Equipe::all();
        return view('equipe', compact('equipes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'nom' => 'required',
            'prenom' => 'required',
            'poste' => 'required'
        ]);

        $image = $request->file('image');
        $nomImage = $image->hashName();
        $image->storePublicly('public');

        $equipe = new Equipe();
        $equipe->image = $nomImage;
        $equipe->nom = $request->nom;
        $equipe->prenom = $request->prenom;
        $equipe->poste = $request->poste;
        $equipe->save();

        return redirect()->route('admin.equipe');
    }

    

}
