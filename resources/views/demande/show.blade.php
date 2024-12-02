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
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                   <li> N°Demande: <strong>{{ $demande->numero }}</strong></li>
                <li><strong> @if($demande->etat==0) <span class="badge badge-soft-danger"> En cours de traitement</span> @else <span class="badge badge-soft-success"> traité</span>  @endif</strong></li>
                <li>Date demande : <strong>{{ $demande->created_at }} </strong></li>
                <li>Durée de la demande  : <strong>{{ $demande->dureelettre }} mois </strong></li>
            </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Herbergeur
                        </div>
                        <div class="card-body">
                            <li>Nom : <strong> {{ $hebergeur->prenom }}  {{ $hebergeur->nom }}</strong></li>
                            <li>Date de Niaissance :  <strong>{{ $hebergeur->datenaiss }} </strong></li>
                            <li>Lieu de Niaissance : <strong> {{ $hebergeur->lieunaiss }} </strong></li>
                            <li>N°Carte d'identite :<strong> {{ $hebergeur->cni }} </strong></li>
                            <li>Demeurant : <strong> {{ $hebergeur->demeurant }}</strong></li>
                            <li>Tel  : <strong>{{ $hebergeur->tel }}</strong> </li>
                            <li>Profession :<strong> {{ $hebergeur->profession }}</strong> </li>
                            <li>Nom pere :<strong> {{ $hebergeur->pere }} </strong></li>
                            <li>Nom mere : <strong> {{ $hebergeur->mere }}</strong></li>


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
                            <li>Nom :<strong> {{ $item->prenom }}  {{ $item->nom }}</strong></li>
                            <li>Date de Naissance : <strong> {{ $item->datenaiss }}</strong> </li>
                            <li>Numéro Passeport  :<strong> {{ $item->passeport }}</strong> </li>
                            <li>Date d'expiration : <strong> {{ $item->expiration }}</strong> </li>
                            <li>Nationalite : <strong> {{ $item->nationalite }}</strong></li>

                            <li>Profession : <strong> {{ $item->profession }}</strong> </li>
                            <li>Lien de Parenté  :<strong> {{ $item->parente }}</strong> </li>
                            <li>motif : <strong> {{ $item->motif }}</strong></li>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
       </div>
    </div>
@endsection

