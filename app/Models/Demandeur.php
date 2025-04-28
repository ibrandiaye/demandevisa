<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'datenaiss',
        'passeport',
        'nationalite',
        'hebergeur_id','expiration','profession','parente','motif'
    ];

    public function hebergeur()
    {
        return $this->hasOne(Hebergeur::class);
    }
}
