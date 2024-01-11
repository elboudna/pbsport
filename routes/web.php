<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\BanniereController;

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



Route::get('/accueil', [AccueilController::class, 'index'])->name('accueil');
Route::get('/', [AccueilController::class, 'index'])->name('accueil');


// Authentication Routes
Route::get('/connexion', [UtilisateurController::class, 'showLoginForm'])->name('showlogin');
Route::post('/connexion', [UtilisateurController::class, 'login'])->name('login');

Route::get('/nouveau-compte', [UtilisateurController::class, 'showRegistrationForm'])->name('showregister');
Route::post('/nouveau-compte', [UtilisateurController::class, 'register'])->name('register');

Route::post('/deconnexion', [UtilisateurController::class, 'logout'])->name('logout');

// User Profile Routes

Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
});
Route::post('/modifierprofil', [ProfilController::class, 'modifierprofil'])->name('modifierprofil');
Route::post('/modifierimage', [ProfilController::class, 'modifierimage'])->name('modifierimage');
//admin modification
Route::put('/modifier-utilisateur/{id}', [ProfilController::class, 'modifierUtilisateur'])->name('modifier-utilisateur');



// produits
Route::get('/magasin', [ProduitController::class, 'index'])->name('magasin');
Route::post('/produit', [ProduitController::class, 'store'])->name('produit.store');
Route::get('/produit/{id}', [ProduitController::class, 'show'])->name('produit.show');
Route::put('/produit/modifier', [ProduitController::class, 'modifier'])->name('produit.modifier');


// admin 
Route::middleware(['role:3'])->group(function () {
    Route::get('/admin/gestion', [AdminController::class, 'index'])->name('admin.gestion');
    Route::get('/admin/ajouter-produit', [AdminController::class, 'ajouterProduit'])->name('admin.ajouter-produit');
    Route::get('/admin/liste-produit', [AdminController::class, 'listeProduit'])->name('admin.liste-produit');
    Route::get('/admin/modifier-produit/{id}', [AdminController::class, 'modifierProduit'])->name('admin.modifier-produit');
    Route::get('/admin/stock-produit/{produit}', [AdminController::class, 'stockProduit'])->name('admin.stock-produit');
    Route::post('/admin/stock-produit/{id}', [AdminController::class, 'stockProduit'])->name('admin.stock-produit');
    Route::get('/admin/ajouter-evenement', [AdminController::class, 'ajouterEvenement'])->name('admin.ajouter-evenement');
    Route::get('/admin/liste-evenement', [AdminController::class, 'listeEvenement'])->name('admin.liste-evenement');
    Route::get('/admin/modifier-evenement/{id}', [AdminController::class, 'modifierEvenement'])->name('admin.modifier-evenement');
    Route::get('/admin/liste-compte', [AdminController::class, 'listeCompte'])->name('admin.liste-compte');
    Route::get('/admin/liste-commande', [AdminController::class, 'listeCommande'])->name('admin.liste-commande');
    Route::get('/admin/ajouter-coach', [AdminController::class, 'ajouterCoach'])->name('admin.ajouter-coach');
    Route::get('/admin/liste-coach', [AdminController::class, 'listeCoach'])->name('admin.liste-coach');
    Route::get('/admin/modifier-coach/{id}', [AdminController::class, 'modifierCoach'])->name('admin.modifier-coach');
    Route::get('/admin/bannieres', [AdminController::class, 'bannieres'])->name('admin.bannieres');
    Route::get('/admin/galerie', [AdminController::class, 'galerie'])->name('admin.galerie');
});

// stock
Route::post('/stock', [StockController::class, 'store'])->name('stock.store');
Route::post('/stock/update', [StockController::class, 'update'])->name('stock.update');

// panier
Route::get('/panier', [PanierController::class, 'index'])->name('panier');
Route::post('/panier/ajouter', [PanierController::class, 'ajouter'])->name('panier.ajouter');

// evenement
Route::get('/evenements', [EvenementController::class, 'index'])->name('evenements');
Route::get('/evenement/{id}', [EvenementController::class, 'show'])->name('evenement.show');
Route::post('/evenement', [EvenementController::class, 'store'])->name('evenement.store');
Route::put('/evenement/modifier/{id}', [EvenementController::class, 'modifier'])->name('evenement.modifier');


// coach
Route::get('/coachs', [CoachController::class, 'index'])->name('coachs');
Route::post('/coach', [CoachController::class, 'store'])->name('coach.store');
Route::put('/coach/modifier/{id}', [CoachController::class, 'modifier'])->name('coach.modifier');


// galerie
Route::get('/galerie', [GalerieController::class, 'index'])->name('galerie');
Route::get('/galerie/{id}', [GalerieController::class, 'show'])->name('galerie.show');
Route::post('/galerie', [GalerieController::class, 'store'])->name('galerie.store');
Route::delete('/galerie/supprimer/{id}', [GalerieController::class, 'supprimer'])->name('galerie.supprimer');

// abonnement
Route::get('/abonnements', [AbonnementController::class, 'index'])->name('abonnements.index');

//banniere
Route::post('/banniere', [BanniereController::class, 'store'])->name('banniere.store');
Route::delete('/banniere/supprimer/{id}', [BanniereController::class, 'supprimer'])->name('banniere.supprimer');
