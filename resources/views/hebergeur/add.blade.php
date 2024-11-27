{{-- \resources\views\permissions\create.blade.php --}}
@extends('welcome')

@section('title', '| Enregister Hebergeur')

@section('content')
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
        </ol>
    </nav>
    <div class="container">
        <form action="{{ route('hebergeur.store') }}" method="POST">
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
                                <label>cni </label>
                                <input type="text" name="cni"  value="{{ old('cni') }}" class="form-control"  required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>demeurant </label>
                                <input type="text" name="demeurant"  value="{{ old('demeurant') }}" class="form-control"  required>
                            </div>
                        </div>
                    </div>

                    <div>

                            <button type="submit" class="btn btn-success btn btn-lg "  onclick="this.disabled=true; this.form.submit();"> ENREGISTRER</button>


                    </div>
                </div>

            </div>

        </form>
    </div>
@endsection


