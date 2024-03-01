<?php

namespace App\Http\Controllers;
//import Evenement model


class AccueilController extends Controller
{
    public function index()
    {
        app()->setLocale('fr');

        // select 4 random produit de la table produit
        $produits = \App\Models\Produit::inRandomOrder()->take(4)->get();

        //select all the banner from the table banniere
        $bannieres = \App\Models\Banniere::all();

        //select 4 random image from the table galerie
        $galeries = \App\Models\Galerie::inRandomOrder()->take(4)->get();

        // select 2 random coach from the table coach
        $coachs = \App\Models\Coach::inRandomOrder()->take(4)->get();

        // select all event order by date_debut from the table evenement, and show the first
        $evenements = \App\Models\Evenement::orderBy('date_debut', 'asc')->take(2)->get();
        // $evenements = Evenement::where('date_debut', '>=', date('Y-m-d'))->orderBy('date_debut', 'asc')->take(2)->get();

        return view('accueil', [
            'produits' => $produits,
            'bannieres' => $bannieres,
            'galeries' => $galeries,
            'evenements' => $evenements,
            'coachs' => $coachs
        ]);
    }
}
