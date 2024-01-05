<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classi extends Model
{
    use HasFactory;
    protected $fillable = ['lv', 'classi', 'caratteristiche', 'datovita'];
    public function personaggio()
    {
        return $this->belongsToMany(personaggio::class);
    }
}
