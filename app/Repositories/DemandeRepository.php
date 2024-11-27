<?php
namespace App\Repositories;

use App\Models\Demande;
use App\Repositories\RessourceRepository;
use Illuminate\Support\Facades\DB;

class DemandeRepository extends RessourceRepository{
    public function __construct(Demande $demande){
        $this->model = $demande;
    }

    }
