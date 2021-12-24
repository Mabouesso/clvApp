<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'genre',
        'dateNaissance',
        'lieuNaissance',
        'telephone1',
        'adresse',
        'pays',
        'ville',
        'village_id'
    ];

    public function Affilliations()
    {
        return $this->hasMany(Affilliation::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
}
