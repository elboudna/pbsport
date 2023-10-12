<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;


class ProfilController extends Controller
{
    //

    public function index()
    {
        $user = auth()->user();
        $user_img = $user->image->chemin;
        $imageFileName = basename($user_img);
        // dd($user->image->id);
        return view('profil', compact('user', 'imageFileName'));
    }

    public function modifierprofil(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'adresse' => 'string|max:255',
            'date_de_naissance' => 'date',
            'sexe' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
        ]);

        // Find the user by email
        $user = Utilisateur::where('email', $credentials['email'])->first();

        // Check if a user with this email exists
        if (!$user) {
            return redirect()->route('login')->with('error', 'Email not found.');
        }

        // Update the user's profile
        $user->nom = $credentials['nom'];
        $user->prenom = $credentials['prenom'];
        $user->adresse = $credentials['adresse'];
        $user->date_de_naissance = $credentials['date_de_naissance'];
        $user->sexe = $credentials['sexe'];
        $user->niveau = $credentials['niveau'];
        $user->save();

        // Redirect back or to a success page
        // return view('profil', compact('user'));
        
        return redirect()->back()->with('success', 'Profile updated successfully.');

    }

    public function modifierimage(Request $request)
    {
        $user = Utilisateur::find(auth()->user()->id);
        // dd(get_class($user));

        // Validate the uploaded file
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Handle image upload
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Store the uploaded image in the storage/app/public/profile_images directory
            $path = $image->storeAs('public/profile_images', $imageName);

            // Create a new image record in the "images" table
            $imageModel = new Image();
            $imageModel->imageable_id = $user->id; // Assuming you want to associate the image with the user
            $imageModel->imageable_type = "Utilisateur"; // Get the class name of the user model
            $imageModel->chemin = $path; // Store the image path
            $imageModel->save(); // Finally, save the record in the database


            // Get the ID of the newly created image
            $imageId = $imageModel->id;

            // Update the user's profile image ID
            $user->image_id = $imageId;
            $user->save();

            // Redirect back or to a success page
            return redirect()->back()->with('success', 'Image uploaded successfully.');
        }

        // If no file was uploaded, return with an error message
        return redirect()->back()->with('error', 'No image selected for upload.');
    }
}
