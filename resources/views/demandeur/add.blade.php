{{-- \resources\views\permissions\create.blade.php --}}
@extends('welcome')

@section('title', '| Enregister Demandeur')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('demandeur.index') }}" >LISTE D'ENREGISTREMENT DES demandeur</a></li>
                </ol>
            </div>
            <h4 class="page-title">Starter</h4>
        </div>
    </div>
    <div class="clearfix"></div>
</div>


        <form action="{{ route('demandeur.store') }}" method="POST">
            @csrf
            <div class="card">
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
                                            <input type="text" name="nom"  value="{{ old('nom') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Prenom </label>
                                            <input type="text" name="prenom"  value="{{ old('prenom') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date de Naissance </label>
                                            <input type="date" name="datenaiss"  value="{{ old('datenaiss') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>passeport </label>
                                            <input type="text" name="passeport"  value="{{ old('passeport') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nationalite </label>
                                            <input type="text" name="nationalite"  value="{{ old('nationalite') }}" class="form-control"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>Hebergeur</label>
                                    <select class="form-control" name="hebergeur_id" required="">
                                        @foreach ($hebergeurs as $hebergeur)
                                        <option value="{{$hebergeur->id}}">{{$hebergeur->nom}}</option>
                                            @endforeach

                                    </select>
                                </div>

                                <div>

                                    <button type="submit" class="btn btn-success btn btn-lg "  onclick="this.disabled=true; this.form.submit();"> ENREGISTRER</button>


                                </div>
                            </div>

                            </div>

            </form>
@endsection


