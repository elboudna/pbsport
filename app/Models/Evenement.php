<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'nom',
        'description',
        'date_debut',
        'heure',
        'lieu',
        'adresse',
        'nbr_joueur',
        'prix',
        'classification',
        'niveau',
        'image',
    ];

    protected $casts = [
        'date_debut' => 'datetime',
    ];
}
