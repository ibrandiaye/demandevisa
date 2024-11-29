{{-- \resources\views\permissions\create.blade.php --}}
@extends('welcome')

@section('title', '| Enregister Hebergeur')

@section('content')
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Demande</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
        </ol>
    </nav>
    <div class="container">
       <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                   <li> N°Demande {{ $demande->numero }}</li>
                <li> @if($demande->etat==0) <span class="badge badge-soft-danger"> En cours de traitement</span> @else <span class="badge badge-soft-success"> traité</span>  @endif</li>
                <li>Date demande : {{ $demande->created_at }} </li>
            </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Herbergeur
                        </div>
                        <div class="card-body">
                            <li>Nom : {{ $hebergeur->prenom }}  {{ $hebergeur->nom }}</li>
                            <li>Date de Niaissance :  {{ $hebergeur->datenaiss }} </li>
                            <li>N°Carte d'identte : {{ $hebergeur->cni }} </li>
                            <li>Demeurant :  {{ $hebergeur->demeurant }}</li>

                        </div>
                    </div>
                </div>
                @foreach ($demandeurs as $item)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Demandeur
                        </div>
                        <div class="card-body">
                            <li>Nom : {{ $item->prenom }}  {{ $item->nom }}</li>
                            <li>Date de Niaissance :  {{ $item->datenaiss }} </li>
                            <li>Numéro Passepor  : {{ $item->passeport }} </li>
                            <li>Nationalite :  {{ $item->nationalite }}</li>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
       </div>
    </div>
@endsection

