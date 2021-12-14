<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function Affiliations()
    {
        return $this->hasMany(Affilliation::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function consultation()
    {
        return $this->hasMany(Consultation::class);
    }
}
