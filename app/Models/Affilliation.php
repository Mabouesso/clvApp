<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affilliation extends Model
{
    use HasFactory;

    public function Patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
