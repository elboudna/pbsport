<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;


class CoachController extends Controller
{
    // Méthode qui renvoie la vue de la page des coachs
    public function index()
    {
        return view('coachs');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'facebook' => 'required|string',
            'email' => 'required|email',
            'telephone' => 'required|string',
            'niveau' => 'required|string',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust the validation rule for images
        ]);

        // Save Coach data
        $coach = Coach::create($validatedData);

        // Handle image upload if provided
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image) {
                // Store the image and associate it with the coach
                $path = $image->store('coach_images', 'public'); // Make sure the 'coach_images' folder exists in your 'public' disk
                $coach->images()->create(['path' => $path]);
            }
        }

        // Redirect or respond as needed
        return redirect()->route('admin.liste-coach')->with('success', 'Coach ajouté avec succès!');
    }

    

}
