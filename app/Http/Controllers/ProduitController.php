<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Image;

class ProduitController extends Controller
{
    //

    public function index()
    {
        $produits = Produit::with('images')->get(); // Retrieve products with their associated images
        return view('magasin', compact('produits'));
    }


    public function store(Request $request)
    {
        // Validez la demande...
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'type_id' => 'required|exists:produit_types,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // You can adjust the image validation rules

        ]);

        $produit = Produit::create([
            'nom' => $validatedData['nom'],
            'description' => $validatedData['description'],
            'prix' => $validatedData['prix'],
            'type_id' => $validatedData['type_id'],
        ]);


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/produit_images');
                $filename = basename($path);

                Image::create([
                    'imageable_id' => $produit->id,
                    'imageable_type' => 'Produit',
                    'chemin' => $filename,
                ]);
            }
        }

        return redirect()->route('admin.liste-produit');
    }

    public function modifier(Request $request)
    {
        $produit = Produit::findOrFail($request->id);
        // Validez la demande...
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'type_id' => 'required|exists:produit_types,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // You can adjust the image validation rules

        ]);

        $produit->update([
            'nom' => $validatedData['nom'],
            'description' => $validatedData['description'],
            'prix' => $validatedData['prix'],
            'type_id' => $validatedData['type_id'],
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('public/produit_images');
                $filename = basename($path);

                Image::create([
                    'imageable_id' => $produit->id,
                    'imageable_type' => 'Produit',
                    'chemin' => $filename,
                ]);
            }
        }
        

        return redirect()->route('admin.liste-produit');
        
    }

    public function show($id)
    {
        $produit = Produit::with('images')->findOrFail($id);
        return view('produit', compact('produit'));

        // afficher les couleurs et les tailles disponibles pour ce produit
    }
}

// suppression d'un produit, supprimer son stock et son image
// ouvrir un produit et afficher ses infos et les tailles et couleurs disponible selon la table stock