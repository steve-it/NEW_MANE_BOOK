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
                            <h2><center>RETOUR DE L'EMPRUNT DE L'OUVRAGE </center>
                                <br> <br>
                                <center> TITRE : <strong>{{ $retouremprunt->TitreDocuments }}</strong></center>
                                <br>
                                <center> EMPRUNTEUR :  <strong>{{ $retouremprunt->NomEmprunteur }}</strong></center>
                                <br>
                                <center> DATE EMPRUNT :  <strong>{{ $retouremprunt->DateEmprunt }}</strong></center>
                                <br>
                                <center> DATE EFFECTIF DE RETOUR EMPRUNT :  <strong>{{ $retouremprunt->DateEffRetourEmprunt }}</strong></center>
                                <BR>
                                <center> DELAI DE RETOUR EMPRUNT PREVU :  <strong>{{ ($retouremprunt->DateEffRetourEmprunt - $retouremprunt->DateEmprunt) + 1 }} Jour(s)</strong></center>
                            </h2>
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
                            {{--<form id="insert_form" method="POST" action="empruntretour" >--}}
                                {{ csrf_field() }}
                                {{ Form::open(['id'=>'ajout','url'=>'Empruntretour', 'method'=>'POST']) }}
                                <input type="hidden" name="idretouremprunt" id="retour" value="{{ $retouremprunt->id }}">

                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group>
                                        <div class="form-line{{ $errors->has('DateConsultations') ? ' has-error' : '' }}">
                                        <label>Date De Retour d'Emprunt De L'Ouvrage</label>
                                        <input type="date" id="Date_Retour" name="Date_Retour" class="form-control" placeholder="Date Retour" value="{{ date('Y-m-d') }}">
                                        @if ($errors->has('Date_Retour'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('Date_Retour') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                                <div class="row clearfix">

                                <div class="col-md-6">
                                    <div class="form-group>
                                        <div class="form-line{{ $errors->has('ObservationRetour') ? ' has-error' : '' }}">
                                    <label>Observation Retour d'Emprunt De L'Ouvrage</label>
                                    <textarea rows="4" class="form-control no-resize" id="ObservationRetour" name="ObservationRetour" placeholder="Observation Retour" value="Ouvrage en etat emprunter"></textarea>
                                    @if ($errors->has('ObservationRetour'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('ObservationRetour') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                </div>


                                <br><button class="btn btn-primary waves-effect" type="submit">ENREGISTRER</button>
                                {{ Form::close() }}


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

            /*   $.ajax({
                  type : post, // method of route get, post.....
                  url : url,
                  data : data , //  JSon Array
                  success:function (data) { console.log(data) },
                  error : function(resultat, statut, erreur){

                  }
              });*/

          });

        /* Script de listy dynamique domaine et Sousdomaine */

        /* Script de listy dynamique domaine et Sousdomaine */






    </script>






@stop