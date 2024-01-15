<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;


class CoachController extends Controller
{
    // Méthode qui renvoie la vue de la page des coachs
    public function index()
    {
        $coachs = Coach::all();
        return view('coachs', compact('coachs'));
    }

    public function store(Request $request)
    {
        $coach = new Coach();

        $coach->nom = $request->nom;
        $coach->prenom = $request->prenom;
        $coach->facebook = $request->facebook;
        $coach->email = $request->email;
        $coach->telephone = $request->telephone;
        $coach->niveau = $request->niveau;
        $coach->description = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('storage/coach_images/', $filename);
            $coach->photo = $filename;
        } else {
            $coach->photo = ''; // or set it to null or any default value
        }

        $coach->save();

        return redirect()->route('admin.liste-coach');

    }

    public function modifier(Request $request, $id)
    {
        $coach = Coach::findOrFail($id);

        $coach->nom = $request->nom;
        $coach->prenom = $request->prenom;
        $coach->facebook = $request->facebook;
        $coach->email = $request->email;
        $coach->telephone = $request->telephone;
        $coach->niveau = $request->niveau;
        $coach->description = $request->description;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('storage/coach_images/', $filename);
            $coach->photo = $filename;
        } else {
            $coach->photo = ''; // or set it to null or any default value
        }

        $coach->save();

        return redirect()->route('admin.liste-coach');

    }

    

}
