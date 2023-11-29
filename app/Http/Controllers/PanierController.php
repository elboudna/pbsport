<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;
use App\Models\Panier;


class PanierController extends Controller
{

    public function index()
    {
        //check if the user is logged in
        if (!auth()->check()) {
            return redirect()->route('login');
        } else {
            // get the user id
            $userId = auth()->user()->id;

            // get the cart for the user
            $cart = Panier::with('produits')->where('utilisateur_id', $userId)->first();

            // calculate the total amount of the cart
            $totalCartAmount = 0;

            // using the produit_id in the pivot table, get the product name
            foreach ($cart->produits as $cartProduit) {
                // Access the pivot data directly
                $quantite = $cartProduit->pivot->quantite;

                // Add quantity and total to the product object
                $cartProduit->quantity = $quantite;
                $cartProduit->total = $quantite * $cartProduit->prix;

                // Calculate the total cart amount
                $totalCartAmount += $cartProduit->total;
            }

            // return the view with the cart products and the total amount
            return view('panier', [
                'panierProduits' => $cart->produits,
                'totalCartAmount' => $totalCartAmount,
            ]);
        }
    }


    public function ajouter(Request $request)
    {
        // Retrieve the values from the form
        $produitId = $request->input('produit_id');
        $color = $request->input('couleur');
        $size = $request->input('taille');
        $quantity = $request->input('quantite');

        // Validate inputs if needed

        // Get the utilisateur id
        $userId = auth()->user()->id;

        // Find or create a shopping cart for the user
        $cart = Panier::where('utilisateur_id', $userId)->first();
        if (!$cart) {
            $cart = new Panier();
            $cart->utilisateur_id = $userId;
            $cart->save();
        }

        // Add the product to the cart
        $cart->produits()->attach($produitId, [
            'quantite' => $quantity,
            'taille' => $size,
            'couleur' => $color,
        ]);

        // Redirect back or to another page
        return redirect()->back()->with('success', 'Product added to the cart successfully');
    }
}
