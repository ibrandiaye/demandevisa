<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hebergeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'datenaiss',
        'cni',
        'demeurant',
        'demande_id','lieunaiss','pere','mere','profession','tel'
    ];
}
