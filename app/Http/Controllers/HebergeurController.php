<?php

namespace App\Http\Controllers;

use App\Repositories\HebergeurRepository;
use Illuminate\Http\Request;

class HebergeurController extends Controller
{
    protected $hebergeurRepository;

    public function __construct(HebergeurRepository $hebergeurRepository){
        $this->hebergeurRepository =$hebergeurRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hebergeurs = $this->hebergeurRepository->getAll();
        return view('hebergeur.index',compact('hebergeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hebergeur.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hebergeurs = $this->hebergeurRepository->store($request->all());
        return redirect('hebergeur');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hebergeur = $this->hebergeurRepository->getById($id);
        return view('hebergeur.show',compact('hebergeur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hebergeur = $this->hebergeurRepository->getById($id);
        return view('hebergeur.edit',compact('hebergeur'));
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
        $this->hebergeurRepository->update($id, $request->all());
        return redirect('hebergeur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->hebergeurRepository->destroy($id);
        return redirect('hebergeur');
    }
}
