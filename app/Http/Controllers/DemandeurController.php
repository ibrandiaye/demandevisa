<?php

namespace App\Http\Controllers;

use App\Repositories\DemandeurRepository;
use Illuminate\Http\Request;

class DemandeurController extends Controller
{
    protected $demandeurRepository;

    public function __construct(DemandeurRepository $demandeurRepository){
        $this->demandeurRepository =$demandeurRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandeurs = $this->demandeurRepository->getAll();
        return view('demandeur.index',compact('demandeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demandeur.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $demandeurs = $this->demandeurRepository->store($request->all());
        return redirect('demandeur');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $demandeur = $this->demandeurRepository->getById($id);
        return view('demandeur.show',compact('demandeur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $demandeur = $this->demandeurRepository->getById($id);
        return view('demandeur.edit',compact('demandeur'));
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
        $this->demandeurRepository->update($id, $request->all());
        return redirect('demandeur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->demandeurRepository->destroy($id);
        return redirect('demandeur');
    }
}
