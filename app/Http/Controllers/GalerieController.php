<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galerie;

class GalerieController extends Controller
{
    public function index()
    {
        $galeries = Galerie::all();
        return view('gallery.index', compact('galeries'));
    }

    public function show($id)
    {
        $galerie = Galerie::findOrFail($id);
        return view('gallery.show', compact('galerie'));
    }

    // Add other methods as needed (create, store, edit, update, destroy)
}
