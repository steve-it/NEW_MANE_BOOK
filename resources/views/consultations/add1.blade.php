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
                            <h2>
                                <center>CONSULTATION DE: <span style="font-weight: bold">{{ $ouvre->TitreDocuments }}</span></center>
                            </h2>
                        </div>

                        <div class="body">

                            {{--  <form id="add_documents" method="POST"> --}}
                            <form id="insert_form" method="POST" action="NouvelleConsultations">
                                {{ csrf_field() }}
                                {{--  {{ Form::open(['url'=>'NewDocuments', 'method'=>'POST']) }}--}}
                                <input type="hidden" name="document" id="document" value="{{ $ouvre->id }}">

                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                            {{ $errors->has('DateConsultations') ? ' has-error' : '' }}

                                            <label>Date de consultation</label>
                                            <input type="date" class="form-control" id="DateConsultations"
                                                   name="DateConsultations" placeholder="DateConsultations"
                                                   value="{{ date('Y-m-d') }}" required>

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


        /*  $('#insert_form').on('submit', function (e) {
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

        /* Script de listy dynamique domaine et Sousdomaine */


    </script>






@stop