<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;
use App\Models\Panier;

class UtilisateurController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function showLoginForm()
    {
        return view('connexion');
    }

    public function showRegistrationForm()
    {
        return view('nouveau-compte');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'mot_de_passe' => 'required|string',
        ]);

        // Find the user by email
        $user = Utilisateur::where('email', $credentials['email'])->first();

        // Check if a user with this email exists
        if (!$user) {
            return redirect()->route('login')->with('error', 'Email not found.');
        }

        // Check if the entered password matches the hashed password in the database
        if (Hash::check($credentials['mot_de_passe'], $user->mot_de_passe)) {
            // Passwords match, so log in the user
            Auth::login($user);

            // Redirect to the "accueil" page
            return redirect('/accueil');
        } else {
            // Passwords don't match
            // Use dd() to debug the values
            dd('Entered Password: ' . $credentials['mot_de_passe'], 'Database Password Hash: ' . $user->mot_de_passe);

            // You can remove the dd() statement and return an error message
            // return redirect()->route('login')->with('error', 'Invalid password.');
        }
    }

    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:utilisateurs',
            'mot_de_passe' => 'required|string|min:8|confirmed', // Ensure password confirmation
        ]);

        // Create a new user
        $utilisateur = Utilisateur::create([
            'prenom' => $request->input('prenom'),
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'mot_de_passe' => bcrypt($request->input('mot_de_passe')),
            // You can set other fields here, e.g., role_id, adresse, sexe, date_de_naissance, niveau
        ]);

        //create a new panier
        Panier::create([
            'utilisateur_id' => $utilisateur->id,
        ]);

        // Authenticate the new user
        Auth::login($utilisateur);

        return redirect('/accueil');
        // Redirect to the accueil page after registration
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/connexion');
    }
}
