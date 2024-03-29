<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Support\Facades\DB;
use App\Models\Utilisateur;
use App\Models\Role;

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

    public function modifierProduit($id)
    {
        $produit = Produit::find($id);
        $produitTypes = DB::table('produit_types')->get();


        return view('admin.modifier-produit', compact('produit', 'produitTypes'));
    }

    public function listeCompte()
    {
        $users = Utilisateur::with('role')->get();
        $roles = Role::all(); // Assuming you have a Role model
    
        return view('admin.liste-compte', compact('users', 'roles'));
    }

    public function ajouterEvenement()
    {
        return view('admin.ajouter-evenement');
    }

    public function listeEvenement()
    {
        $evenements = DB::table('evenements')->get();
        return view('admin.liste-evenement', compact('evenements'));
    }

    public function modifierEvenement($id)
    {
        $evenement = DB::table('evenements')->where('id', $id)->first();
        return view('admin.modifier-evenement', compact('evenement'));
    }

    public function ajouterCoach()
    {
        return view('admin.ajouter-coach');
    }

    public function listeCoach()
    {
        $coachs = DB::table('coachs')->get();
        return view('admin.liste-coach', compact('coachs'));
    }

    public function modifierCoach($id)
    {
        $coach = DB::table('coachs')->where('id', $id)->first();
        return view('admin.modifier-coach', compact('coach'));
    }

    public function bannieres()
    {
        $bannieres = DB::table('bannieres')->get();
        return view('admin.bannieres', compact('bannieres'));
    }

    public function galerie()
    {
        $images = DB::table('galeries')->get();
        return view('admin.galerie', compact('images'));
    }

    public function listeEquipe()
    {
        $membres = DB::table('equipe')->get();
        return view('admin.liste-equipe', compact('membres'));
    }
}

