<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\User;
use App\Models\Panier;
use App\Models\Image;


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

            // get the cart for the user with products and their sizes/colors
            $cart = Panier::with(['produits', 'produits.type'])->where('utilisateur_id', $userId)->first();

            // calculate the total amount of the cart
            $totalCartAmount = 0;

            // prepare an array to store products with additional information
            $panierProduits = [];

            // using the produit_id in the pivot table, get the product name
            foreach ($cart->produits as $cartProduit) {
                // Access the pivot data directly
                $quantite = $cartProduit->pivot->quantite;
                $taille = $cartProduit->pivot->taille;
                $couleur = $cartProduit->pivot->couleur;

                // get the image for the product
                $image = Image::where('imageable_id', $cartProduit->id)->first();

                // Add product details to the array
                $panierProduits[] = [
                    'nom' => $cartProduit->nom,
                    'quantity' => $quantite,
                    'taille' => $taille,
                    'couleur' => $couleur,
                    'prix' => $cartProduit->prix * $quantite,
                    'total' => $quantite * $cartProduit->prix,
                    'image' => $image->chemin,
                ];

                
                // Calculate the total cart amount
                $totalCartAmount += $quantite * $cartProduit->prix;
            }           
            
            // dd($panierProduits[1]['image']);
            // return the view with the cart data
            return view('panier', [
                'panierProduits' => $panierProduits,
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
