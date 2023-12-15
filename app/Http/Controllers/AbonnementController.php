<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abonnement;

class AbonnementController extends Controller
{
    public function index()
    {
        $abonnements = Abonnement::all();
        return view('abonnements.index', compact('abonnements'));
    }
}
