@extends('page_model')

@section('css')

    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/waitme/waitMe.css")}} rel="stylesheet">
    <link href={{asset("css/select2.min.css")}} rel="stylesheet">
    <link href={{asset("css/jquery.ui.autocomplete.css")}} rel="stylesheet">

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
                            <div style="color: #0b6701;padding: 20px 2px;" >{!! session('ok') !!}</div>
                        </div>

                        <div class="body">

                            {{--  <form id="add_documents" method="POST"> --}}
                            <form id="insert_form" method="POST" action="NewDocuments" >
                                {{ csrf_field() }}
                                {{--  {{ Form::open(['url'=>'NewDocuments', 'method'=>'POST']) }}--}}

                                <input type="hidden" name="id" value="{{ ($document->id)?$document->id:'' }}">

                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            Type du document
                                            <div class="form-line">
                                                <select class="ms" style="width:100%" name="categories_id" id="categorie">
                                                    <option value="">Choisir le Type du document</option>
                                                    @foreach($categories as $categorie)
                                                        <option value="{{ $categorie->id }}" {{ ($document->Categories && $document->Categories->id == $categorie->id)?'selected':'' }} >{{ $categorie->libelle }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <p></p>
                                                <input type="text" class="form-control" name="TitreDocuments"
                                                id="TitreDocuments" required placeholder="Entrez le Titre ou le Theme" value="{{ $document->TitreDocuments }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <div class="form-line">
                                                <p></p>
                                                <input type="text" class="form-control" name="Auteur"
                                                       id="Auteur" required placeholder="Entrez le(s) nom(s) de(s) l'auteur(s)" value="{{ $document->Auteur }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Cote du document</label>
                                                <input type="text" class="form-control" name="CoteDocuments"
                                                       placeholder="Cote du document" required value="{{$document->CoteDocuments}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Nombre d'exemplaire</label>
                                                <input type="number" class="form-control" value="1" name="NbreExemplaireEdition"
                                                       placeholder="Nombre d'exemplaire">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="ms" style="width:100%" name="Section" id="Section">
                                                    <option value="">Choisir la Section</option>
                                                    <optgroup label="DIVISION ADMINISTRATIVE ">
                                                        {!! $buildOption('ADMINISTRATION GENERALE') !!}
                                                        {!! $buildOption('ADMINISTRATION DU TRAVAIL') !!}
                                                        {!! $buildOption('ECONOMIE ET FINANCE') !!}
                                                        {!! $buildOption('ADMINISTRATION DES AFFAIRES SOCIALES') !!}
                                                    </optgroup>
                                                    <optgroup label="DIVISION DE LA MAGISTRATURE ET DES GREFFES">
                                                        {!! $buildOption('ADMINISTRATEUR DE GREFFES') !!}
                                                        {!! $buildOption('AUDITEURS DE JUSTICE ADMINISTRATIVE') !!}
                                                        {!! $buildOption('AUDITEURS DE JUSTICE DES COMPTES') !!}
                                                        {!! $buildOption('AUDIETEURS DE JUSTICE JUDICIAIRE') !!}
                                                        {!! $buildOption('TRESOR') !!}
                                                    </optgroup>
                                                    <optgroup label="DIVISION DES REGIES FINANCIERES">
                                                        {!! $buildOption('DOUANE') !!}
                                                        {!! $buildOption('GREFFES') !!}
                                                        {!! $buildOption('IMPOT') !!}
                                                        {!! $buildOption('PRIX POIDS ET MESURES') !!}
                                                    </optgroup>
                                                    <optgroup label="AUTRES">
                                                        {!! $buildOption('LIVRE') !!}
                                                        {!! $buildOption('ROMAN') !!}
                                                        {!! $buildOption('REVUE') !!}
                                                        {!! $buildOption('TEXTES DE LOI ET DECRETS') !!}
                                                        {!! $buildOption('PERIODIQUE') !!}
                                                    </optgroup>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-md-6">
                                         <div class="form-group">
                                            <div class="form-line">
                                                <p>Domaine de connaissance
                                                    <span style="position: relative;left:240px;top: 15px">
                                                      <a href="{{ url('domaines') }}" class="mce-menu-item">
                                                         <i class="material-icons" style="color: red ">add_box</i>
                                                      </a>
                                                    </span>
                                                </p>

                                                <select class="ms" style="width:100%" name="domaine" id="domaine" >
                                                    <option value="value='' selected">Selectionnez un Domaine de Connaissance</option>
                                                    @foreach($domaines as $domaine)
                                                        <option value="{{ $domaine->id }}" {{ ($document->SousDomaines && $domaine->id == $document->SousDomaines->Domaines->id)?'selected':'' }}>{{ $domaine->NomDomaines  }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                         <div class="form-group">
                                            {{--<div class="form-line">--}}
                                            <p>Sous domaine</p>
                                            <select class="ms" style="width:100%" name="sousdomaine" id="sousdomaine">
                                                <option value="{{ ($document->SousDomaines)?$document->SousDomaines->id:'' }}" selected></option>
                                                {{--<option value="">---------Selectionnez un Sous domaine --</option>--}}
                                                {{--@foreach($sousdomaines as $sousdomaine)--}}
                                                {{--<option value="{{ $sousdomaine->id }}">{{ $sousdomaine->NomSousDomaines }}</option>--}}
                                                {{--@endforeach--}}
                                            </select>
                                            {{--</div>--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-md-6">

                                    </div>

                                    <div class="col-md-6">
                                         <div class="form-group">
                                             <div class="form-line">
                                                 <label style="color: red">Nouveau Sous Domaine Inexistant de la liste de selection haut</label>
                                                 <input type="text" class="form-control" name="NouveauSousdomains" id="NouveauSousdomains"
                                                        placeholder="Entrez le nouveau sous domaine inexistant de liste">
                                             </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Annee Publication Documents</label>
                                                <input type="number" class="form-control" name="AnneePublicationDocuments"
                                                       placeholder="Annee Publication Documents">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Année d'edition du document</label>
                                                <input type="number" class="form-control" name="DateEditionDocuments"
                                                       placeholder="Année d'edition du document">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Lieu d'edition</label>
                                                <input type="text" class="form-control" name="LieuEditionDocuments"
                                                       placeholder="Lieu d'edition du document">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="EditionsDocuments"
                                                       id="EditionsDocuments" placeholder="Edition du document">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="MaisonEditionDocuments"
                                                       id="MaisonEditionDocuments" placeholder="Maison d'edition du document">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="AdresseMaisonEdition"
                                                       id="AdresseMaisonEdition" placeholder="Adresse de la maison d'edition">
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row clearfix">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="IsbnDocuments"
                                                       placeholder="ISBN du document" >
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="IssnDocuments"
                                                       placeholder="ISSN du document" >
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row clearfix">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Reliure du document</label>
                                                <select class="ms" style="width:100%" name="ReliureDocuments" id="ReliureDocuments" >
                                                    <option value=' ' selected></option>
                                                    <option value="brochet" {{ ($document->ReliureDocuments=='brochet')?'selected':'' }}>Brochet</option>
                                                    <option value="reliure" {{ ($document->ReliureDocuments=='reliure')?'selected':'' }}>Reliure</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Illustration du document</label>
                                                <select class="ms" style="width:100%" name="IllustrationDocuments" id="IllustrationDocuments" >
                                                    <option value=' ' selected></option>
                                                    <option value="il" {{ ($document->IllustrationDocuments=='il')?'selected':'' }}>il</option>
                                                    <option value="il en coule" {{ ($document->IllustrationDocuments=='il en coule')?'selected':'' }}>il en coule</option>
                                                    <option value="sans il" {{ ($document->IllustrationDocuments=='sans il')?'selected':'' }}>sans il</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">Pagination</span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="pagination"
                                                       id="pagination"
                                                       placeholder="nombre de pages">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon">Longueur</span>
                                            <div class="form-line">
                                                <input type="number" style="text-align:right;" class="form-control" name="LongueurEditionDocuments"
                                                    id="LongueurEditionDocuments"
                                                placeholder="00">
                                            </div>
                                            <span class="input-group-addon" id="basic-addon2">cm</span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="EditeurDocuments"
                                                       id="EditeurDocuments" placeholder="Editeur du document">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Origine du document</label>
                                                <select class="ms" style="width:100%" name="origine" id="origine" >
                                                    <option value=""></option>
                                                    <option value="achat">achat</option>
                                                    <option value="don">don</option>
                                                    <option value="leg">leg</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="PeriodiciteDocuments"
                                                       id="PeriodiciteDocuments" placeholder="Periodicite du document">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="NumeroDecret"
                                                       placeholder="Numero du decret">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="NumeroEntresDocuments"
                                                       placeholder="Numéro d'entrée du document">
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                {{--    <div id="member-block" class="header">
                                        <h2> Choisir les Auteur(s) de cet ouvrage </h2>
                                        <br>

                                        <button id="insert-member" class="btn btn-success">Ajouter</button>
                                      </br>
                                      </br>
                                        <div id="base-member" class="row">
                                            <div class="form-group">
                                                {{ Form::select('idauteur[]', $auteurs, null, ['id'=>'membre_id1', 'class'=>'ms', 'placeholder' =>"-- Choisir le nom de l'auteur--", 'style'=>'width:60%']) }}
                                            </div>
                                        </div>
                                    </div>


                                <div class="row clearfix">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<div class="form-line">--}}
                                            {{--<select class="ms" name="idauteur" id="auteur_id">--}}
                                                {{--<option value="">---------SVP Selectionner l'auteur de l'ouvre --</option>--}}
                                                {{--@foreach($auteurs as $auteur)--}}
                                                    {{--<option value="{{ $auteur->id }}">{{ $auteur->NomAuteur }}</option>--}}
                                                {{--@endforeach--}}
                                            {{--</select>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</div>--}}

                              {{--</div>--}}



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


            /*$('#Auteur').autocomplete({
                minlenght:1,
                autoFocus:true,
                select:function(e,ui){
                    alert(ui);
                }
            });*/

            src = "{{ url('searchTitre') }}";

            $('#TitreDocuments').autocomplete({
                source : src,
                minlenght:3,
                autoFocus:true
            });

            src = "{{ url('searchPeriodicite') }}";

            $('#PeriodiciteDocuments').autocomplete({
                source : src,
                minlenght:3,
                autoFocus:true
            });

            /*autocomplete */
            {{--src = "{{ route('searchajax') }}";--}}
            /*$("#Auteur").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: src,
                        dataType: "json",
                        data: {
                            term : request.term
                        },
                        success: function(data) {
                            response(data);

                        }
                    });
                },
                minLength: 3,

            });*/
        });

        //script plusieurs Auteurs

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
        //script plusieurs Auteurs


       /* $('#insert_form').on('submit', function (e) {
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

/* Script de liste deroulante*/
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

                    $('#sousdomaine').append($('<option>', {
                        value: '',
                        text : 'Choisir le sous-domaine  (Si inexiste pas renseigner ci-dessous)'
                    }));
                    $.each(data, function(index, cities) {
                        // alert(cities.NomSousDomaines);
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







    </script>
  <script>
      {{--{!! Html::script('bower_components/adminbsb-materialdesign/plugins/bootstrap-select/js/bootstrap-select.js') !!}--}}
      {!! Html::script('js/jquery.js') !!}
      {!! Html::script('js/jquery-ui.min.js') !!}


</script>


@stop
