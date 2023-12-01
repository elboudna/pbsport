<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', // Add the 'type' attribute to the fillable array
        'nom',
        'description',
        
    ];
}
