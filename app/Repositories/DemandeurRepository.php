<?php
namespace App\Repositories;

use App\Models\Demandeur;
use App\Repositories\RessourceRepository;
use Illuminate\Support\Facades\DB;

class DemandeurRepository extends RessourceRepository{
    public function __construct(Demandeur $demandeur){
        $this->model = $demandeur;
    }

    }
