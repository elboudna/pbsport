<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galerie;

class GalerieController extends Controller
{
    public function index()
    {
        $images = Galerie::all();

        return view('galerie', [
            'images' => $images
        ]);
    }

    public function store()
    {
        $galerie = new Galerie();

        $galerie->nom = request('nom');

        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('storage/galerie/', $filename);
            $galerie->image = $filename;
        } else {
            $galerie->image = ''; // or set it to null or any default value
        }

        $galerie->save();

        return redirect()->route('admin.galerie');
    }

    public function supprimer($id)
    {
        $galerie = Galerie::find($id);
        $galerie->delete();

        return redirect()->route('admin.galerie');
    }
}