<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.gestion');
    }

    public function ajouterProduit()
    {
        $produitTypes = DB::table('produit_types')->get();
        return view('admin.ajouter-produit', compact('produitTypes'));
    }

    public function listeProduit()
    {
        // Fetch a list of products from your database, eager loading the 'type' relationship
        $produits = Produit::with('type')->get();

        return view('admin.liste-produit', compact('produits'));
    }
}
