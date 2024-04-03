<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    protected $table = 'ordonnances'; // Nom de la table

    protected $fillable = [
        'nomMedecin',
        'Medicament',
        'Posologie',
        'signature',
        'date',
        'Numero',
        'Matricule'
    ]; // Attributs pouvant être mass-assignés
    // Relation avec le modèle Patient
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'Numero', 'Numero');
    }

    // Relation avec le modèle Medecin
    public function medecin()
    {
        return $this->belongsTo(Medecin::class, 'Matricule', 'Matricule');
    }
}

