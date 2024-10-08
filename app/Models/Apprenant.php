<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'date_naissance', 'sexe', 'referentiel_id', 'photo', 'matricule', 'qr_code', 'is_active'
    ];

    // Relation avec les notes
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    // Relation avec le référentiel
    public function referentiel()
    {
        return $this->belongsTo(Referentiel::class);
    }
}
