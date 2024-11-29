@extends('welcome')
@section('title', '| demande')


@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">

                                <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#" role="button">ACCUEIL</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('demande.create') }}" role="button" >ENREGISTRER demande</a></li>
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
        <div class="card-header">LISTE D'ENREGISTREMENT DES Demandes</div>
            <div class="card-body">

                <table id="example1" class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Numero Demande</th>
                            <th>Etat</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($demandes as $demande)
                        <tr>
                            <td>{{ $demande->id }}</td>
                            <td>{{ $demande->numero }}</td>
                            <td> @if($demande->etat==0) <span class="badge badge-soft-danger"> En cours de traitement</span> @else <span class="badge badge-soft-success"> traité</span>  @endif</td>
                            <td>
                                <a href="{{ route('demande.show', $demande->id) }}" role="button" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('demande.edit', $demande->id) }}" role="button" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                {!! Form::open(['method' => 'DELETE', 'route'=>['demande.destroy', $demande->id], 'style'=> 'display:inline', 'onclick'=>"if(!confirm('Êtes-vous sûr de vouloir supprimer cet enregistrement ?')) { return false; }"]) !!}
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
