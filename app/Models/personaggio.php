<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personaggio extends Model
{
    use HasFactory;

    public function scheda()
    {
        return $this->belongsTo(scheda::class);
    }

    public function classi()
    {
        return $this->belongsToMany(classi::class);
    }

    public function razze()
    {
        return $this->hasMany(razze::class);
    }
}
