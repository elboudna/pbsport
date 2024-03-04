<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    //database name is equipe
    protected $table = 'blogs'; // Make sure it matches your actual table name
    
    protected $fillable = [
        'titre', 'contenu', 'image'
        // Add other fields as needed
    ];
}