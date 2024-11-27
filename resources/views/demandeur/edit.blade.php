{{-- \resources\views\permissions\create.blade.php --}}
@extends('welcome')

@section('title', '| Modifier Région')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#" role="button">ACCUEIL</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('demandeur.index') }}" >RETOUR</a></li>

                        </ol>
                    </div><!-- /.col -->
        </div>
    </div>
</div>

        {!! Form::model($demandeur, ['method'=>'PATCH','route'=>['demandeur.update', $demandeur->id]]) !!}
            @csrf
             <div class="card">
                        <div class="card-header text-center">FORMULAIRE DE MODIFICATION DEMANDEUR</div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nom </label>
                                            <input type="text" name="nom"  value="{{$demandeur->nom }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Prenom </label>
                                            <input type="text" name="prenom"  value="{{$demandeur->prenom }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date de Naissance </label>
                                            <input type="date" name="datenaiss"  value="{{$demandeur->datenaiss }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>passeport </label>
                                            <input type="text" name="passeport"  value="{{$demandeur->passeport }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nationalite </label>
                                            <input type="text" name="nationalite"  value="{{$demandeur->nationalite }}" class="form-control"  required>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label>Hebergeur</label>
                                        <select class="form-control" name="hebergeur_id" required="">
                                            <option value="">Selectionner</option>
                                            @foreach ($hebergeurs as $hebergeur)
                                            <option value="{{$hebergeur->id}}"  {{ $hebergeur->id==$demandeur->hebergeur_id ? 'selected' : ''}} >{{$hebergeur->prenom}} {{$hebergeur->nom}} {{$hebergeur->cni}}</option>
                                                @endforeach

                                        </select>
                                    </div>

                                </div>
                                <div>

                                        <button type="submit" class="btn btn-success btn btn-lg "> MODIFIER</button>

                                </div>


                            </div>
                        </div>
    {!! Form::close() !!}

@endsection
