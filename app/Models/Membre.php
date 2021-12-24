<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Membre extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function patient()
    {
        return  $this->HasOne(Patient::class);
    }
}
