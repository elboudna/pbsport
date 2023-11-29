<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
        'utilisateur_id',
    ];


    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'panier_produit')
            ->withPivot('quantite') // Include any additional pivot columns if needed
            ->withTimestamps();
    }
}
