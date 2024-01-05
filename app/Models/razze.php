<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class razze extends Model
{
    use HasFactory;
    public function personaggios()
    {
        return $this->belongsTo(personaggio::class);
    }
}
