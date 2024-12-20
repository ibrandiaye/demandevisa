@extends('welcome')
@section('title', '| demandeur')


@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">

                                <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#" role="button">ACCUEIL</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('demandeur.create') }}" role="button" >ENREGISTRER demandeur</a></li>
                                </ol>
                            </div><!-- /.col -->
                        </div>
                    </div>
                </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="col-12">
    <div class="card ">
        <div class="card-header">LISTE D'ENREGISTREMENT DES Demandeurs</div>
            <div class="card-body">
               
                <table id="example1" class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Date de Naissance</th>
                            <th>passeport</th>
                            <th>nationalite</th>
                            <th>Hebergeur</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($demandeurs as $demandeur)
                        <tr>
                            <td>{{ $demandeur->id }}</td>
                            <td>{{ $demandeur->prenom }}</td>
                            <td>{{ $demandeur->nom }}</td>
                            <td>{{ $demandeur->datenaiss }}</td>
                            <td>{{ $demandeur->passeport }}</td>
                            <td>{{ $demandeur->nationalite }}</td>
                            <td>{{ $demandeur->hebergeur->prenom }} {{ $demandeur->hebergeur->nom }} {{ $demandeur->hebergeur->cni }}</td>
                            <td>
                                <a href="{{ route('demandeur.edit', $demandeur->id) }}" role="button" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                {!! Form::open(['method' => 'DELETE', 'route'=>['demandeur.destroy', $demandeur->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
                                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                {!! Form::close() !!}



                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>



            </div>

        </div>
    </div>
</div>


@endsection
