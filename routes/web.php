<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/', [AccueilController::class, 'index'])->name('accueil');



// Authentication Routes
Route::get('/connexion', [UtilisateurController::class, 'showLoginForm'])->name('showlogin');
Route::post('/connexion', [UtilisateurController::class, 'login'])->name('login');

Route::get('/nouveau-compte', [UtilisateurController::class, 'showRegistrationForm'])->name('showregister');
Route::post('/nouveau-compte', [UtilisateurController::class, 'register'])->name('register');

Route::post('/deconnexion', [UtilisateurController::class, 'logout'])->name('logout');

// User Profile Routes
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::post('/modifierprofil', [ProfilController::class, 'modifierprofil'])->name('modifierprofil');
Route::post('/modifierimage', [ProfilController::class, 'modifierimage'])->name('modifierimage');



// produits
Route::get('/magasin', [ProduitController::class, 'index'])->name('magasin');