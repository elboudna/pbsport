<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

class EvenementController extends Controller
{
    public function index()
    {
        app()->setLocale('fr');

        $evenements = Evenement::all();

        return view('evenements', compact('evenements'));
    }

    public function show($id)
    {
        app()->setLocale('fr');

        $evenement = Evenement::findOrFail($id);

        return view('evenement', compact('evenement'));
    }

    public function store(Request $request)
    {
        $evenement = new Evenement();

        $evenement->type = $request->type;
        $evenement->nom = $request->nom;
        $evenement->description = $request->description;
        $evenement->date_debut = $request->date_debut;
        $evenement->heure = $request->heure;
        $evenement->lieu = $request->lieu;
        $evenement->adresse = $request->adresse;
        $evenement->nbr_joueur = $request->nombre_joueurs;
        $evenement->prix = $request->prix;
        $evenement->categorie = $request->categorie;
        $evenement->niveau = $request->niveau;
        $evenement->telephone = $request->telephone;
        $evenement->email = $request->email;
        $evenement->lien = $request->lien;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('storage/evenement_images/', $filename);
            $evenement->image = $filename;
        } else {
            $evenement->image = ''; // or set it to null or any default value
        }

        $evenement->save();

        return redirect()->route('admin.liste-evenement');
    }



    public function modifier(Request $request, $id)
    {
        $evenement = Evenement::findOrFail($id);

        $evenement->type = $request->type;
        $evenement->nom = $request->nom;
        $evenement->description = $request->description;
        $evenement->date_debut = $request->date_debut;
        $evenement->heure = $request->heure;
        $evenement->lieu = $request->lieu;
        $evenement->adresse = $request->adresse;
        $evenement->nbr_joueur = $request->nombre_joueurs;
        $evenement->prix = $request->prix;
        $evenement->categorie = $request->categorie;
        $evenement->niveau = $request->niveau;
        $evenement->telephone = $request->telephone;
        $evenement->email = $request->email;
        $evenement->lien = $request->lien;


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('storage/evenement_images/', $filename);
            $evenement->image = $filename;
        } else {
            return $request;
            $evenement->image = '';
        }

        $evenement->save();

        return redirect()->route('admin.liste-evenement');
    }
}
