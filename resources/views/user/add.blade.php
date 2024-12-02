{{-- \resources\views\permissions\create.blade.php --}}
@extends('welcome')

@section('title', '| Enregister Département')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">

                        <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}" >ACCUEIL</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('user.index') }}" >LISTE  UTILISATEUR </a></li>

                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
             <div class="card">
                        <div class="card-header  text-center">FORMULAIRE D'ENREGISTREMENT D'UN UTILISATEUR</div>
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
                                <div class="col-lg-6 offset-lg-3">
                                    <div class="form-group">
                                        <label>Nom </label>
                                        <input type="text" name="name"  value="{{ old('name') }}" class="form-control"required>
                                    </div>
                                </div>
                                <div class="col-lg-6  offset-lg-3">
                                    <div class="form-group">
                                        <label>email </label>
                                        <input type="email" name="email"  value="{{ old('email') }}" class="form-control"required>
                                    </div>
                                </div>
                                <div class="col-lg-6  offset-lg-3">
                                    <div class="form-group">
                                        <label>Mot de Passe </label>
                                        <input id="password" type="password" name="password"  value="{{ old('password') }}" class="form-control"required>
                                    </div>
                                </div>
                                <div class="col-lg-6  offset-lg-3">
                                    <div class="form-group">
                                        <label>Confirmer Mot de passe </label>
                                        <input id="password-confirm" type="password"  name="password_confirmation" value="{{ old('name') }}" class="form-control"required>
                                    </div>
                                </div>


                                    <div class="col-lg-6  offset-lg-3">
                                        <label>Role</label>
                                        <select class="form-control" name="role" required="">
                                            <option value="">Selectionner</option>
                                            <option value="admin">Admin</option>
                                            <option value="enqueteur">Enqueteur</option>
                                            <option value="controlleur">controlleur</option>
                                        </select>
                                    </div>

                                <div>
                                    <br>
                                    <center>
                                        <button type="submit" class="btn btn-success btn btn-lg "> ENREGISTRER</button>
                                    </center>
                                </div>
                            </div>

                            </div>

            </form>

@endsection


