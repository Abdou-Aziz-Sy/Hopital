<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hopital extends Model
{
    use HasFactory;

    protected $table = 'hopitals'; // Nom de la table dans la base de données

    protected $fillable = [
        'Nom',
        'Adresse',
        'Services'
    ];

}
