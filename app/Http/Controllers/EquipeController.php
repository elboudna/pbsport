<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeController extends Controller
{
    //

    public function index()
    {
        $membres = Equipe::orderBy('position', 'asc')->get();
        return view('equipe', compact('membres'));
    }

    public function store(Request $request)
    {
        $membre = new Equipe();

        $membre->nom = $request->nom;
        $membre->prenom = $request->prenom;
        $membre->poste = $request->poste;
        $membre->position = $request->position;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('storage/equipe_images/', $filename);
            $membre->image = $filename;
        } else {
            $membre->image = ''; // or set it to null or any default value
        }

        $membre->save();

        return redirect()->route('admin.liste-equipe');

    }

    public function supprimer($id)
    {
        $membre = Equipe::find($id);
        $membre->delete();

        return redirect()->route('admin.liste-equipe');
    }

    public function modifier(Request $request, $id)
    {
        $membre = Equipe::findOrFail($id);

        $membre->nom = $request->nom;
        $membre->prenom = $request->prenom;
        $membre->poste = $request->poste;
        $membre->position = $request->position;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('storage/equipe_images/', $filename);

            $membre->image = $filename;
        } 

        $membre->save();

        return redirect()->route('admin.liste-equipe');
    }

    

}
