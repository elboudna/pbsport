<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        // select 4 random produit de la table produit
        $produits = \App\Models\Produit::inRandomOrder()->take(4)->get();

        //select all the banner from the table banniere
        $bannieres = \App\Models\Banniere::all();

        return view('accueil', [
            'produits' => $produits,
            'bannieres' => $bannieres
        ]);


    }
}
