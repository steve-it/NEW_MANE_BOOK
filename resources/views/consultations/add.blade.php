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
                            <h2>NOUVELLE CONSULTATION D'OUVRAGE DOCUMENTAIRE</h2>
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
                            <form id="insert_form" method="POST" action="NouvelleConsultations" >
                                {{ csrf_field() }}
                                {{--  {{ Form::open(['url'=>'NewDocuments', 'method'=>'POST']) }}--}}

                                <!-- champ NomDomaines -->
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select class="ms" style="width:100%" name="domaine" id="domaine" >
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
                                                    <select class="ms"  style="width:100%" name="sousdomaine" id="sousdomaine">
                                                        <option value="">---------SVP Selectionner le Sous domaine --</option>
                                                        {{--@foreach($sousdomaines as $sousdomaine)--}}
                                                            {{--<option value="{{ $sousdomaine->id }}">{{ $sousdomaine->NomSousDomaines }}</option>--}}
                                                        {{--@endforeach--}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="ms"  style="width:100%" name="categories_id" id="categorie">
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
                                                <select class="ms"  style="width:100%" name="document" id="documentid">
                                                    <option value="">---------SVP Selectionner l'Ouvrage --</option>
                                                    @foreach($documents as $document)
                                                        <option value="{{ $document->id }}">{{ $document->TitreDocuments }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row clearfix">
                                    <div class="col-md-6">
                                    <div class="form-group>
                                        <div class="form-line{{ $errors->has('DateConsultations') ? ' has-error' : '' }}">
                                            <input type="date" id="DateConsultations" name="DateConsultations" class="form-control" placeholder="DateConsultations">
                                            @if ($errors->has('DateConsultations'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('DateConsultations') }}</strong>
                                            </span>
                                            @endif
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


        $('select[name="destination"]').change(function() {
            $('input[name="prix"]').val($(this).find('option:selected').data('prix'));
        });


        /*$('#insert_form').on('submit', function (e) {
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

        });*/

        /* Script de listy dynamique domaine et Sousdomaine */
        $(function() {

            // Récupération des id pour pays et ville
            var domaineid = $('#domaine').val();
            var sousdomaineid = $('#sousdomaine').val();
            //alert(sousdomaine);

            // Sélection du pays
            $('#domaine').val(domaineid).prop('selected', true);
            // Synchronisation des villes
            cityUpdate(domaineid);

            // Changement de pays
            $('#domaine').on('change', function(e) {
                var domaineid = e.target.value;
                sousdomaineid = false;
                cityUpdate(domaineid);
            });

            // Requête Ajax pour les villes
            function cityUpdate(DomaineId) {
                $.get('{{ url('cities') }}/'+ DomaineId + "'", function(data) {
                    $('#sousdomaine').empty();
                    $.each(data, function(index, cities) {
                        alert(cities.NomSousDomaines);
                        $('#sousdomaine').append($('<option>', {
                            value: cities.id,
                            text : cities.NomSousDomaines
                        }));
                    });
                    if(sousdomaineid) {
                        $('#sousdomaine').val(sousdomaineid).prop('selected', true);
                    }
                });
            }

        });
        /* Script de listy dynamique domaine et Sousdomaine */






    </script>






@stop