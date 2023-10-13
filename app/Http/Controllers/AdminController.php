<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produit;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.gestion');
    }

    public function ajouterProduit()
    {
        return view('admin.ajouter-produit');
    }

    public function listeProduit()
    {
        // Fetch a list of products from your database and pass it to the view
        $produits = Produit::all(); // Adjust this to your Product model and database structure

        return view('admin.liste-produit', compact('produits'));
    }
}
