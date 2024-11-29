@extends('welcome')
@section('title', '| hebergeur')


@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">

                                <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#" role="button">ACCUEIL</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('hebergeur.create') }}" role="button" >ENREGISTRER hebergeur</a></li>
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
        <div class="card-header">LISTE D'ENREGISTREMENT DES Hebergeurs</div>
            <div class="card-body">

                <table id="example1" class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Date de Naissance</th>
                            <th>CNI</th>
                            <th>Demeurant</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($hebergeurs as $hebergeur)
                        <tr>
                            <td>{{ $hebergeur->id }}</td>
                            <td>{{ $hebergeur->prenom }}</td>
                            <td>{{ $hebergeur->nom }}</td>
                            <td>{{ $hebergeur->datenaiss }}</td>
                            <td>{{ $hebergeur->cni }}</td>
                            <td>{{ $hebergeur->demeurant }}</td>
                            <td>
                                <a href="{{ route('hebergeur.edit', $hebergeur->id) }}" role="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                {!! Form::open(['method' => 'DELETE', 'route'=>['hebergeur.destroy', $hebergeur->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
