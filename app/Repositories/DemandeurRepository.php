<?php
namespace App\Repositories;

use App\Models\Demandeur;
use App\Repositories\RessourceRepository;
use Illuminate\Support\Facades\DB;

class DemandeurRepository extends RessourceRepository{
    public function __construct(Demandeur $demandeur){
        $this->model = $demandeur;
    }

    public function getByHebergeur($id)
    {
        return DB::table("demandeurs")->where("hebergeur_id",$id)->get();
    }

    public function deleteByHebergeur($id)
    {
        return DB::table("demandeurs")->where("hebergeur_id",$id)->delete();
    }

    }
