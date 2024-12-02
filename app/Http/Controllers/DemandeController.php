<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Demandeur;
use App\Repositories\DemandeRepository;
use App\Repositories\DemandeurRepository;
use App\Repositories\HebergeurRepository;
use Illuminate\Http\Request;

class DemandeController extends Controller
{

    protected $demandeRepository;
    protected $hebergeurRepository;
    protected $demandeurRepository;

    public function __construct(DemandeRepository $demandeRepository,HebergeurRepository $hebergeurRepository,DemandeurRepository $demandeurRepository){
        $this->demandeRepository =$demandeRepository;
        $this->hebergeurRepository = $hebergeurRepository;
        $this->demandeurRepository = $demandeurRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandes = $this->demandeRepository->getAll();
        return view('demande.index',compact('demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hebergeurs = $this->hebergeurRepository->getAll();
        return view('demande.add',compact("hebergeurs"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['dureelettre'=>$this->demandeRepository->convertNumberToWords($request->dureechiffre)]);


        $demande                = $this->demandeRepository->store($request->all());
      //  dd($this->demandeRepository->convertNumberToWords($request->dureechiffre));
        //dd($request->demande_id);
        $request->merge(['demande_id'=>$demande->id]);

        $hebergeur              = $this->hebergeurRepository->store($request->all());

        $sizeTab                = count($request->nomcand);
        $nomcands               = $request->nomcand;
        $prenomcands            = $request->prenomcand;
        $datenaisscands         = $request->datenaisscand;
        $passeportcands         = $request->passeportcand;
        $nationalitecands       = $request->nationalitecand;

        $expirations            = $request->expirationcand;
        $professions            = $request->professioncand;
        $parentes               = $request->parentecand;
        $motifs               = $request->motifcand;

        for ($i=0; $i < $sizeTab ; $i++) {
            $demandeur                    = new Demandeur();
            $demandeur->nom               = $nomcands[$i];
            $demandeur->prenom            = $prenomcands[$i];
            $demandeur->datenaiss         = $datenaisscands[$i];
            $demandeur->passeport         = $passeportcands[$i];
            $demandeur->nationalite       = $nationalitecands[$i];
            $demandeur->expiration        = $expirations[$i];
            $demandeur->profession        = $professions[$i];
            $demandeur->parente           = $parentes[$i];
            $demandeur->motif             = $motifs[$i];
            $demandeur->hebergeur_id      = $hebergeur->id;
            $demandeur->save();
        }

        return redirect('demande');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $demande = $this->demandeRepository->getById($id);
        $hebergeur = $this->hebergeurRepository->getByDemande($id);
        $demandeurs = $this->demandeurRepository->getByHebergeur($hebergeur->id);
        return view('demande.show',compact('demande','hebergeur','demandeurs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $demande = $this->demandeRepository->getById($id);
        $hebergeurs = $this->hebergeurRepository->getAll();
        return view('demande.edit',compact('demande',"hebergeurs"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->demandeRepository->update($id, $request->all());
        return redirect('demande');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->demandeRepository->destroy($id);
        return redirect('demande');
    }
}
