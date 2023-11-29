<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PanierController;

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

Route::post('/produit', [ProduitController::class, 'store'])->name('produit.store');

Route::get('/produit/{id}', [ProduitController::class, 'show'])->name('produit.show');



// admin 

Route::get('/admin/gestion', [AdminController::class, 'index'])->name('admin.gestion');
Route::get('/admin/ajouter-produit', [AdminController::class, 'ajouterProduit'])->name('admin.ajouter-produit');
Route::get('/admin/liste-produit', [AdminController::class, 'listeProduit'])->name('admin.liste-produit');

Route::get('/admin/modifier-produit/{id}', [AdminController::class, 'modifierProduit'])->name('admin.modifier-produit');
Route::post('/admin/modifier-produit/{id}', [AdminController::class, 'modifierProduit'])->name('admin.modifier-produit');

Route::get('/admin/stock-produit/{produit}', [AdminController::class, 'stockProduit'])->name('admin.stock-produit');
Route::post('/admin/stock-produit/{id}', [AdminController::class, 'stockProduit'])->name('admin.stock-produit');

// stock

Route::post('/stock', [StockController::class, 'store'])->name('stock.store');
Route::post('/stock/update', [StockController::class, 'update'])->name('stock.update');

// panier

Route::get('/panier', [PanierController::class, 'index'])->name('panier');
Route::post('/panier/ajouter', [PanierController::class, 'ajouter'])->name('panier.ajouter');