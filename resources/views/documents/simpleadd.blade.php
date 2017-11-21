@extends('page_model')

@section('css')
    <link href={{asset("css/sweetalert2.min.css")}} rel="stylesheet"/>


    <!-- Bootstrap Material Datetime Picker Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css")}} rel="stylesheet">
    <!-- Bootstrap Select Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap-select/css/bootstrap-select.css")}} rel="stylesheet">
    <!-- Wait Me Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/waitme/waitMe.css")}} rel="stylesheet">

    <style>
        .delete-member-block {
            position: absolute;
            right: 5px;
            z-index: 2;
        }
    </style>
@stop

@section('main_content')
    <section class="content">
        <div class="container" style="width: 90%;">
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>OUVRAGE DOCUMENTAIRE</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="body">

                            {{--  <form id="add_documents" method="POST"> --}}
                            <form id="insert_form" method="POST" action="NewDocuments" >
                                {{ csrf_field() }}
                                {{--  {{ Form::open(['url'=>'NewDocuments', 'method'=>'POST']) }}--}}

                                 <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="domaine_id" id="domaine_id" >
                                                <option value="value='-1' selected">---SVP Selectionner le Domaine deConnaissance ----</option>
                                                @foreach($domaines as $domaine)
                                                    <option value="{{ $domaine->id }}">{{ $domaine->NomDomaines  }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="sousdomaines_id" id="sous_domaine_id">
                                                <option value="">---------SVP Selectionner le Sous domaine --</option>
                                                @foreach($sousdomaines as $sousdomaine)
                                                    <option value="{{ $sousdomaine->id }}">{{ $sousdomaine->NomSousDomaines }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="categories_id" id="categorie">
                                                <option value="">---------SVP Selectionner la Categorie --</option>
                                                @foreach($categories as $categorie)
                                                    <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="TitreDocuments"
                                                   id="TitreDocuments" required>
                                            <label class="form-label">Titre De l'Ouvrage</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="IsbnDocuments"
                                                   placeholder="Isbn Du Documents" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="IssnDocuments"
                                                   placeholder="Issn Du Documents" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="CoteDocuments"
                                                   placeholder="Cote Documents" required>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="NumeroEntresDocuments"
                                                   placeholder="Numero Entres Documents " required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="EditionsDocuments"
                                                   id="EditionsDocuments" required>
                                            <label class="form-label">Edition Du Documents</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="IllustrationDocuments"
                                                   id="IllustrationDocuments" required>
                                            <label class="form-label">Illustration Du Document</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Annee Publication Documents</label>
                                            <input type="date" class="form-control" name="AnneePublicationDocuments"
                                                   placeholder="Annee Publication Documents">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Annee Edition Documents</label>
                                            <input type="date" class="form-control" name="AnneeEditionDocuments"
                                                   placeholder="Annee Edition Documents" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Nombre Exemplaire Edition</label>
                                            <input type="number" class="form-control" name="NbreExemplaireEdition"
                                                   placeholder="Nombre Exemplaire Edition" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="MaisonEditionDocuments"
                                                   id="MaisonEditionDocuments" placeholder="Maison Edition Documents"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="AdresseMaisonEdition"
                                                   id="AdresseMaisonEdition" placeholder="Adresse Maison Edition"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="LargeurEditionDocuments"
                                                   id="LargeurEditionDocuments" placeholder="Largeur Edition Documents"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="LongueurEditionDocuments"
                                                   id="LongueurEditionDocuments"
                                                   placeholder="Longueur Edition Documents" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="PeriodiciteDocuments"
                                                   id="PeriodiciteDocuments" placeholder="Periodicite Documents"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="ReliureDocuments"
                                                   id="ReliureDocuments" placeholder="Reliure Documents" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="idauteur" id="auteur_id">
                                                <option value="">---------SVP Selectionner l'auteur de l'ouvre --</option>
                                                @foreach($auteurs as $auteur)
                                                    <option value="{{ $auteur->id }}">{{ $auteur->NomAuteur }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>

                              </div>


                            <button class="btn btn-primary waves-effect" type="submit">ENREGISTRER</button>
    {{--{{ Form::close() }}--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
        </div>
    </section>
@stop

@section('js')

    <script type="text/javascript">


        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });


        $('#insert_form').on('submit', function (e) {
            e.preventDefault();

            var data= $(this).serialize();

            var url = $(this).attr('action');
            var post = $(this).attr('method');

            alert(data);

            $.ajax({
                type : post, // method of route get, post.....
                url : url,
                data : data , //  JSon Array
                success:function (data) { console.log(data) },
                error : function(resultat, statut, erreur){

                }
            });

       });





    </script>






@stop