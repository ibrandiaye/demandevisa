<?php

namespace App\Http\Controllers;

use App\Repositories\DemandeRepository;
use App\Repositories\HebergeurRepository;
use Illuminate\Http\Request;

class DemandeController extends Controller
{

    protected $demandeRepository;
    protected $hebergeurRepository;

    public function __construct(DemandeRepository $demandeRepository,HebergeurRepository $hebergeurRepository){
        $this->demandeRepository =$demandeRepository;
        $this->hebergeurRepository = $hebergeurRepository;
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
        $demandes = $this->demandeRepository->store($request->all());
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
        return view('demande.show',compact('demande'));
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
