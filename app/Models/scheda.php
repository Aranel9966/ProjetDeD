<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scheda extends Model
{
    use HasFactory;

    protected $fillable = [
        'Forza', 'Destrezza', 'Costituzione', 'Intelligenza', 'Saggezza', 'Carisma'
    ];
    public function personaggio()
    {
        return $this->hasMany(personaggio::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
