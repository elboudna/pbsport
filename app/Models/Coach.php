<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'facebook', 'email', 'telephone', 'niveau', 'description'
        // Add other fields as needed
    ];
}