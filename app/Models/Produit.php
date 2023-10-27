<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', // Add the 'nom' attribute to the fillable array
        'description',
        'prix',
        'type_id',
    ];

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function type()
    {
        return $this->belongsTo(ProduitType::class, 'type_id');
    }


    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
