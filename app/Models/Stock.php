<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $table = 'stock'; // Set the correct table name

    protected $fillable = ['produit_id', 'couleur', 'taille', 'stock'];


    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}
