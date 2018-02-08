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
                            <h2> Enregistrement D'un Emprunt</h2>

                        </div>
                        <div class="body">
                            {{ Form::open(['id'=>'ajout','url'=>'NouvelleEmprunts', 'method'=>'POST']) }}



                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="NomEmprunteur"
                                                       id="NomEmprunteur" placeholder="Nom de l'Emprunteur" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="CniEmprunteur"
                                                       id="CniEmprunteur" placeholder="Cni de l'Emprunteur" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="adresse"
                                                       id="adresse" placeholder="Adresse de l'Emprunteur" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Date D'emprunt</label>
                                                <input type="date" class="form-control" name="DateEmprunt"
                                                       id="DateEmprunt" placeholder="DateEmprunt" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Date Effectif Retour Emprunt</label>
                                                <input type="date" class="form-control" name="DateEffRetourEmprunt"
                                                       id="DateEffRetourEmprunt" placeholder="DateEffRetourEmprunt" required>
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
                                                  <input value="" type="text" name="prix" id="cardNumber" autocomplete="off" placeholder="Montant Caution" readonly
                                                            onFocus="this.blur()" required/>FCFA
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ObservationEmprunt"
                                                       id="ObservationEmprunt" placeholder="ObservationEmprunt" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ObservationRetour"
                                                       id="ObservationRetour" placeholder="ObservationRetour" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div id="member-block" class="header">
                                <h2> Choisir les Documents A Emprunter</h2>
                                <br>

                                <button id="insert-member" class="btn btn-success">Ajouter</button>

                                <div id="base-member" class="row">
                                    <div class="form-group">
                                        {{ Form::select('membre_id[]', $documents, null, ['id'=>'membre_id1', 'class'=>'form-control', 'placeholder' =>'-- Choisir --']) }}
                                    </div>
                                </div>
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


        $('select[name="destination"]').change(function() {
            $('input[name="prix"]').val($(this).find('option:selected').data('prix'));
        });


        var counter=1;
        $("#insert-member").click(function(e){
            e.preventDefault()

            var clone = $("#base-member").clone();

            counter += 1;
            clone.appendTo('#member-block');
            clone.attr('id', 'member_id' + counter);
            clone.find('.form-group').append(clone.find('select'))
            clone.find('.bootstrap-select').remove();
            clone.find('select')
                .addClass('form-control')
                .selectpicker();

            var closeBtn = $('<button type="button" class="close delete-member-block" data-dismiss="modal">&times;</button>');
            closeBtn.click(function () {
                clone.remove();
            });
            clone.find('select')
                .after(closeBtn);
        });
    </script>
@stop
