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

    public function stockProduit(Produit $produit)
    {
        // by using the id of the produit, you can fetch the stock records with the produit_id
        $stocks = DB::table('stock')->where('produit_id', $produit->id)->orderBy('couleur')->get();
        // $stocks = $produit->stock;
        return view('admin.stock-produit', compact('produit', 'stocks'));
    }
}
