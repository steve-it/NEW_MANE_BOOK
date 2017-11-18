@extends('page_model')

@section('css')
    <link href={{asset("css/sweetalert2.min.css")}} rel="stylesheet"/>
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap-select/css/bootstrap-select.css")}} rel="stylesheet">
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/waitme/waitMe.css")}} rel="stylesheet">


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
                            {{ Form::open(['url'=>'NewDocuments', 'method'=>'POST']) }}


                            {{--<div class="row clearfix">--}}
                            {{--<div class="col-sm-4">--}}
                            {{--<div class="form-group">--}}
                            {{--<div class="form-line">--}}
                            {{--<input type="text" class="datepicker form-control" placeholder="Please choose a date...">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-4">--}}
                            {{--<div class="form-group">--}}
                            {{--<div class="form-line">--}}
                            {{--<input type="text" class="timepicker form-control" placeholder="Please choose a time...">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-4">--}}
                            {{--<div class="form-group">--}}
                            {{--<div class="form-line">--}}
                            {{--<input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}


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
                                            <select class="form-control show-tick" name="sous_domaine_class" id="sous_domaine_id">
                                                <option>******************************</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="categorie" id="categorie">
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

                            <div class="form-group form-float">

                                <div class="table-responsive">
                                    <div align="legth">
                                        <button type="button" name="add" id="add" class="btn btn-warning"
                                                title="Ajouter Un Auteur de cet Ouvrage"><i class="material-icons">add_box</i>
                                        </button>
                                    </div>
                                </div>
                            </div>


                            {{--<div class="form-group form-float">--}}
                            {{--<div class="form-line">--}}
                            {{--<input type="text" class="form-control" name="date" required>--}}
                            {{--<label class="form-label">Date</label>--}}
                            {{--</div>--}}
                            {{--<div class="help-info">YYYY-MM-DD format</div>--}}
                            {{--</div>--}}


                            <button class="btn btn-primary waves-effect" type="submit">ENREGISTRER</button>
                            {{ Form::close() }}
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


           $('#domaine_id').on('change', function (e) {
                console.log(e);
                var iddo = e.target.value;

                var div = $(this).parent();

               // var op = " ";

                //ajax
                $.get('Selectsousdomaine?iddomain=' + iddo, function (data) {
                      // alert(data);
                    $('#sous_domaine_id').append(data);

                    //success data
                    //$('#sous_domaine_id').empty();
                   /* $.each(data, function (index, subdomaine) {
                       //alert(subdomaine.NomSousDomaines);
                    /*   op+='<option value="0" selected disabled>god</option>';
                        for(var i=0;i<data.length;i++)
                        {
                            op+='<option value="'+data[i].id+'">'+data[i].NomSousDomaines+'</option>';

                        }*/

                        //$('#sous_domaine_id').appendTo('<option value="'+subdomaineObj.id+'">' +subdomaineObj.NomSousDomaines+'</option>');
                        //$('.sous_domaine_id').prepend('<option value="' + subdomaine.id + '">' + subdomaine.NomSousDomaines + '</option>');
                        /*div.find('.sous_domaine_class').html(" ");
                        div.find('.sous_domaine_class').append(op);*/
                   //});
                   // alert(op);
                });

            });





        });




    </script>

    <script>
        //bootstrap Material Datetime Picker Plugin Js
        {{--{!! Html::script('bower_components/adminbsb-materialdesign/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') !!}--}}

        <!-- Autosize Plugin Js -->
        {{--{!! Html::script('bower_components/adminbsb-materialdesign/plugins/autosize/autosize.js') !!}--}}


        <!-- Moment Plugin Js -->
        {{--{!! Html::script('bower_components/adminbsb-materialdesign/plugins/momentjs/moment.js') !!}--}}
        {{--{!! Html::script('bower_components/adminbsb-materialdesign/js/pages/forms/basic-form-elements.js') !!}--}}
    </script>




@stop