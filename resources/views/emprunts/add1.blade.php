@extends('page_model')

@section('css')
    <link href={{asset("css/sweetalert2.min.css")}} rel="stylesheet" />
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap-select/css/bootstrap-select.css")}} rel="stylesheet">
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/waitme/waitMe.css")}} rel="stylesheet">

    <style>
        .delete-member-block{
            position: absolute;
            right: 5px;
            z-index: 2;
        }
    </style>
@stop
@section('main_content')
    <section class="content">
        <div class="container" style="width: 90%;">
            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2> Emprunt de l'ouvrage Titre:  {{ $ouvre->TitreDocuments }}</h2>

                        </div>
                        <div class="body">
                            {{ Form::open(['id'=>'ajout','url'=>'NouvelleEmprunts', 'method'=>'POST']) }}

                            <input type="hidden" name="document" id="document" value="{{ $ouvre->id }}">


                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="NomEmprunteur"
                                                       id="NomEmprunteur" placeholder="Nom de l'Emprunteur" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="CniEmprunteur"
                                                       id="CniEmprunteur" placeholder="Cni de l'Emprunteur">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Date D'emprunt</label>
                                                <input type="date" class="form-control" name="DateEmprunt"
                                                       id="DateEmprunt" placeholder="DateEmprunt"  value="{{ date('Y-m-d') }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Date effective du Retour</label>
                                                <input type="date" class="form-control" name="DateEffRetourEmprunt"
                                                       id="DateEffRetourEmprunt" placeholder="DateEffRetourEmprunt" value="{{ date('Y-m-d') }}" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Adresse de l'emprunteur</label>
                                                <input type="text" class="form-control" name="adresse"
                                                       id="adresse"  required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="destination" id="status">
                                                    <option data-prix="cautionEmprunteur" selected="selected"
                                                            value='Choisissez'>Choisissez le status de l'emprunteur
                                                    </option>
                                                    <option data-prix="1000" value='Etudiants'>Etudiants</option>
                                                    <option data-prix="0" value='Personnels Enam'>Personnels Enam et Autres</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="prix" id="prix">
                                                    <option selected="selected" value='0'>Gratuit</option>
                                                    <option value="5000">5.000Fr</option>
                                                    <option value="10000">10.000Fr</option>
                                                </select>
                                            </div>      
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" cols="1" class="form-control no-resize auto-growth" name="ObservationEmprunt"
                                                          id="ObservationEmprunt" placeholder="ObservationEmprunt" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    {{--<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="4" cols="1" class="form-control no-resize auto-growth" name="ObservationRetour"
                                                          id="ObservationRetour" placeholder="ObservationRetour" required></textarea>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>





                                <input type="submit" onsubmit="swal('hello');" value="Save" class="btn btn-primary m-t-15 waves-effect">

                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#ajout').on('submit', function (e) {


            var data= $(this).serialize();

            var url = $(this).attr('action');
            var post = $(this).attr('method');

            /*
            alert(data);

            $.ajax({
                type : post, // method of route get, post.....
                url : url,
                data : data , //  JSon Array
                success:function (data) { console.log(data) },
                error : function(resultat, statut, erreur){

                }
            });
            */
        });


        $('select[name="destination"]').change(function() {
            $('input[name="prix"]').val($(this).find('option:selected').data('prix'));
        });



    </script>
@stop
