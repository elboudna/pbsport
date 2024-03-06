<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{

    //database name is equipe
    protected $table = 'equipe'; // Make sure it matches your actual table name
    
    protected $fillable = [
        'nom', 'prenom', 'poste', 'image'
        // Add other fields as needed
    ];
}