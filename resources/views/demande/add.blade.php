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
        <form action="{{ route('demande.store') }}" method="POST">
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
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Numero Demande  </label>
                                        <input type="text" name="numero"  value="{{ old('numero') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Duree de la Demande  </label>
                                        <input type="number" name="dureechiffre"  value="{{ old('dureechiffre') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom Hebergeur</label>
                                        <input type="text" name="nom"  value="{{ old('nom') }}" class="form-control"  required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Prenom Hebergeur</label>
                                        <input type="text" name="prenom"  value="{{ old('prenom') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date de Naissance Hebergeur</label>
                                        <input type="date" name="datenaiss"  value="{{ old('datenaiss') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lieu Naissance Hebergeur</label>
                                        <input type="text" name="lieunaiss"  value="{{ old('lieunaiss') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>cni Hebergeur</label>
                                        <input type="text" name="cni"  value="{{ old('cni') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>demeurant Hebergeur</label>
                                        <input type="text" name="demeurant"  value="{{ old('demeurant') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tel Hebergeur</label>
                                        <input type="text" name="tel"  value="{{ old('tel') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Profession Hebergeur</label>
                                        <input type="text" name="profession"  value="{{ old('profession') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom Pere Hebergeur</label>
                                        <input type="text" name="pere"  value="{{ old('pere') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom Mere Hebergeur</label>
                                        <input type="text" name="mere"  value="{{ old('mere') }}" class="form-control"  required>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom Demandeur</label>
                                        <input type="text" name="nomcand[]"  value="{{ old('nom') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Prenom Demandeur</label>
                                        <input type="text" name="prenomcand[]"  value="{{ old('prenom') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date de Naissance Demandeur</label>
                                        <input type="date" name="datenaisscand[]"  value="{{ old('datenaiss') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nationalite Demandeur </label>
                                        <input type="text" name="nationalitecand[]"  value="{{ old('nationalite') }}" class="form-control"  required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Numero passeport Demandeur</label>
                                        <input type="text" name="passeportcand[]"  value="{{ old('passeport') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>date expiration Demandeur</label>
                                        <input type="date" name="expirationcand[]"  value="{{ old('expirationcand') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><br>Profession Demandeur&nbsp;</label>
                                        <input type="text" name="professioncand[]"  value="{{ old('professioncand') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Lien de Parente avec l'hebergeur</label>
                                        <input type="text" name="parentecand[]"  value="{{ old('parentecand') }}" class="form-control"  required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Motif demande</label>
                                        <input type="text" name="motifcand[]"  value="{{ old('motifcand') }}" class="form-control"  required>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="card-footer text-center">
                            <center>
                            <button type="button" class="btn btn-icon btn-secondary btn-icon-style-1" id="ajoutdemandeur"><span class="btn-icon-wrap"><i class="fa fa-pencil"></i></span></button>
                        </center>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row" id="demandeur">

            </div>

            <div>

                <button type="submit" class="btn btn-success btn btn-lg "  onclick="this.disabled=true; this.form.submit();"> ENREGISTRER</button>


        </div>
        </form>
    </div>
@endsection

@section('script')
<script>
$(document).ready(function () {

    $("#btnenreg").prop("disabled","true");
    $("#ajoutdemandeur").click(function() {

        $("#demandeur").append("<div class='col-6'><div class='card'><div class='card-body'><div class='row'><div class='col-md-6'><div class='form-group'><label>Nom Demandeur</label><input type='text' name='nomcand[]'  class='form-control'  required> </div></div>"+
                               "<div class='col-md-6'><div class='form-group'><label>Prenom Demandeur </label><input type='text' name='prenomcand[]'   class='form-control'  required></div></div>"+
                                "<div class='col-md-6'> <div class='form-group'><label>Date de Naissance Demandeur </label><input type='date' name='datenaisscand[]'  class='form-control'  required></div> </div> "+
                                "<div class='col-md-6'><div class='form-group'><label>Numero passeport Demandeur</label> <input type='text' name='passeportcand[]'   class='form-control'  required></div></div>"+
                                "<div class='col-md-6'><div class='form-group'><label>date expiration Demandeur</label><input type='date' name='expirationcand[]'  value='{{ old('expirationcand') }}' class='form-control'  required></div></div>"+

                                "<div class='col-md-6'><div class='form-group'><label>Nationalites Demandeur</label><input type='text' name='nationalitecand[]' class='form-control'  required></div></div>"+
                                "<div class='col-md-6'><div class='form-group'><label>Profession Demandeur</label><input type='text' name='professioncand[]'  value='{{ old('professioncand') }}' class='form-control'  required></div></div>"+
                                "<div class='col-md-6'><div class='form-group'><label>Lien de Parente avec l'hebergeur</label><input type='text' name='parentecand[]'  value='{{ old('parentecand') }}' class='form-control'  required></div></div>"+
                               " <div class='col-md-12'><div class='form-group'><label>Motif demande</label><input type='text' name='motifcand[]'  value='{{ old('motifcand') }}' class='form-control'  required></div></div>"+

                                 "</div></div><div class='card-footer'><button type='button' class='btn btn-icon btn-danger btn-icon-style-1 remove-tr' ><span class='btn-icon-wrap'><i class='fa fa-trash'></i></span></button></div></div></div>"
                            );
        //alert(nameTxt);
        $("#btnenreg").removeAttr("disabled");
    });
    $(".btnenreg").click(function() {
        $("#btnenreg").prop("disabled","true");
    });
});
$(document).on('click', '.remove-tr', function(){
    $(this).parents('div .col-6').remove();
    var quant = $('.quant').val();
    if(quant==null)
        $("#btnenreg").prop("disabled","true");
    else
        $("#btnenreg").removeAttr("disabled");
});

</script>


@endsection
