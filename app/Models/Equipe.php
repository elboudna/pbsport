<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{

    protected $fillable = [
        'nom', 'prenom', 'poste'
        // Add other fields as needed
    ];
}