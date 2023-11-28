<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;


class PanierController extends Controller
{

    public function index()
    {
        // afficher les produit de la base de donnée selon l'id de l'utilisateur
        return view('panier');
    }

    public function ajouter(Request $request)
    {
        $produitId = $request->input('produit_id');
        $quantite = $request->input('quantite');
        $taille = $request->input('taille');
        $couleur = $request->input('couleur');

        $produit = Produit::find($produitId);



        // You can customize this logic based on your cart implementation
        return redirect()->back()->with('success', 'Produit ajouté au panier avec succès');
    }
}
