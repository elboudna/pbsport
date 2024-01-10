<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banniere;

class BanniereController extends Controller
{
    //

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titre' => 'required|string',
            'sous_titre' => 'nullable|string',
            'url' => 'nullable|string',
        ]);

        // Enregistrement de la bannière dans la base de données
        $banniere = new Banniere;
        $banniere->titre = $request->titre;
        $banniere->sous_titre = $request->sous_titre;
        $banniere->url = $request->url;

        // Traitement de l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/bannieres/', $imageName);
            $banniere->image = $imageName;
        }

        $banniere->save();

        // Redirection ou autre traitement après l'ajout de la bannière
        return redirect()->back()->with('success', 'Bannière ajoutée avec succès.');
    }


    public function supprimer($id)
    {
        $banniere = Banniere::find($id);
        $banniere->delete();

        return redirect()->back()->with('success', 'Bannière supprimée avec succès.');
    }
}
