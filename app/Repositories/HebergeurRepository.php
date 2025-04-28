<?php
namespace App\Repositories;

use App\Models\Hebergeur;
use App\Repositories\RessourceRepository;
use Illuminate\Support\Facades\DB;

class HebergeurRepository extends RessourceRepository{
    public function __construct(Hebergeur $hebergeur){
        $this->model = $hebergeur;
    }
    public function getByDemande($id)
    {
        return DB::table("hebergeurs")->where("demande_id",$id)->first();
    }
    public function getByDemandeEnqueteur($id)
    {
        return DB::table("hebergeurs")->where("demande_id",$id)->first();
    }
    }
