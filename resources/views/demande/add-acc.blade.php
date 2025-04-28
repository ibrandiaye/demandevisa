{{-- \resources\views\permissions\create.blade.php --}}
@extends('welcome')

@section('title', '| Enregister Hebergeur')

@section('content')
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Demande</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ajouter Demande</li>
        </ol>
    </nav>
    <div class="container">
        <form action="{{ route('store_acc') }}" method="POST">
            @csrf

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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-group">
                                        <label>Numero Demande  </label>
                                        <input type="text" name="numero"  value="{{ old('numero') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-group">
                                        <label>Duree de la Demande  </label>
                                        <input type="number" name="dureechiffre"  value="{{ old('dureechiffre') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-group">
                                        <label>Prenom Demandeur</label>
                                        <input type="text" name="prenom"  value="{{ old('prenom') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-group">
                                        <label>Nom Hebergeur</label>
                                        <input type="text" name="nom"  value="{{ old('nom') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-lg-6  offset-lg-3">
                                    <label>Utilisater</label>
                                    <select class="form-control" name="user_id" required="">
                                        <option value="">Selectionner</option>
                                        @foreach ($users as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div>
                <button type="submit" class="btn btn-success btn btn-lg "  onclick="this.disabled=true; this.form.submit();"> ENREGISTRER</button>
            </div>
        </form>
    </div>
@endsection

