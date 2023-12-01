<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Utilisateur extends Authenticatable // Update the parent class
{
    use HasFactory, Notifiable;

    protected $table = 'utilisateurs'; // Specify the correct table name

    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'mot_de_passe',
        'adresse',
        'sexe',
        'date_de_naissance',
        'niveau',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }


    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id'); // Adjust the foreign key column if needed
    }
}
