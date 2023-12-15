<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        // select 4 random produit de la table produit
        $produits = \App\Models\Produit::inRandomOrder()->take(4)->get();

        return view('accueil', ['produits' => $produits]);

    }
}
