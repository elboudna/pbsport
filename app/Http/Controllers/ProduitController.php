<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    //

    public function index()
    {
        return view('magasin');
    }

    public function store(Request $request)
    {
        // Validez la demande...

        $produit = new Produit;

        // nom, description et prix obligatoires, couleur et dimension optionnels
        $produit->nom = $request->input('nom');
        $produit->description = $request->input('description');
        $produit->prix = $request->input('prix');
        $produit->type_id = $request->input('type_id');

        $produit->save();


        return redirect()->route('admin.liste-produit');

        // // Récupérez la liste de produits depuis la base de données
        // $produits = Produit::all();


        // return view('admin.liste-produit', compact('produits'));
    }
}
