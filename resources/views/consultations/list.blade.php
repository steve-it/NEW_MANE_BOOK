

@extends('page_model')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        html{
            overflow-y : scroll;
        }
    </style>
    {!! Html::style('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}

@stop

@section('main_content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">

                <br />
                <div class="table-responsive">
                    <div align="right">

                        <div >
                            {!! link_to_route('addConsultations', 'Ajouter une Consultations', [], ['class' => 'btn btn-large btn-primary', 'style' =>"position: absolute;  top: 80px; right: 120px;" ]) !!}
                        </div>
                        {{--<button type="button" name="add" id="add" class="btn btn-warning" title="Ajouter"><i class="material-icons">add_box</i></button>--}}
                    </div>
                </div>
            </div>
            <!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTE DES CONSULTATIONS
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>

                                    <tr>
                                        <th>Domaines</th>
                                        <th>SousDomaines</th>
                                        <th>Categories</th>
                                        <th>Titre Ouvrages</th>
                                        <th>Date Consultées</th>
                                        <th class="noExport">Action</th>
                                    </tr>

                                    </thead>

                                    <tbody>

                                    @foreach($consultations as $consultation)
                                        <tr id="consultations{{$consultation->id}}">
                                            <td>{{ $consultation->NomDomaines }}</td>
                                            <td>{{ $consultation->NomSousDomaines }}</td>
                                            <td>{{ $consultation->libelle }}</td>
                                            <td>{{ $consultation->TitreDocuments }}</td>
                                            <td>{{ $consultation->DateConsultations }}</td>

                                            <td>
                                                <button class="btn btn-xs btn-info" name="edit" id="edit" data-target="#add_data_Modal" data-id="{{ $consultation->id }}"title="voir"><i class="material-icons">list</i></button>
                                                <button class="btn btn-xs btn-danger" data-id="{{ $consultation->id }}" title="Supprimer"><i class="material-icons">remove</i></button>

                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                    <tfoot>

                                    <tr>
                                        <th>Domaines</th>
                                        <th>SousDomaines</th>
                                        <th>Categories</th>
                                        <th>Titre Ouvrages</th>
                                        <th>Date Consultées</th>
                                        <th class="noExport">Action</th>
                                    </tr>
                                    </tfoot>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #END# Striped Rows -->
@stop


{{--@section('modal_content')--}}



    {{--<div id="add_data_Modal" class="modal fade">--}}
        {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<h4 class="modal-title">Informations de Consultation </h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<form id="insert_form" method="POST" action="NouveauDomaines" >--}}
                    {{--{{ csrf_field() }}--}}

                    {{--<!-- champ cache -->--}}
                        {{--<input type="hidden"  id="consultationid" name="id">--}}

                        {{--<!-- champ NomDomaines -->--}}
                        {{--<div class="row clearfix">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<div class="form-line">--}}
                                        {{--<select class="form-control show-tick" name="domaine_id" id="domaine_id" >--}}
                                            {{--<option value="value='-1' selected">---SVP Selectionner le Domaine deConnaissance ----</option>--}}
                                            {{--@foreach($domaines as $domaine)--}}
                                                {{--<option value="{{ $domaine->id }}">{{ $domaine->NomDomaines  }}</option>--}}
                                            {{--@endforeach--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--<div class="form-line">--}}
                                        {{--<select class="form-control show-tick" name="sousdomaines_id" id="sous_domaine_id">--}}
                                            {{--<option value="">---------SVP Selectionner le Sous domaine --</option>--}}
                                            {{--@foreach($sousdomaines as $sousdomaine)--}}
                                                {{--<option value="{{ $sousdomaine->id }}">{{ $sousdomaine->NomSousDomaines }}</option>--}}
                                            {{--@endforeach--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group form-float">--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="form-line">--}}
                                    {{--<select class="form-control show-tick" name="categories_id" id="categorie">--}}
                                        {{--<option value="">---------SVP Selectionner la Categorie --</option>--}}

                                        {{--@foreach($categories as $categorie)--}}
                                            {{--<option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group form-float">--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="form-line">--}}
                                    {{--<select class="form-control show-tick" name="categories_id" id="categorie">--}}
                                        {{--<option value="">---------SVP Selectionner l'Ouvrage --</option>--}}
                                        {{--@foreach($documents as $document)--}}
                                            {{--<option value="{{ $document->id }}">{{ $document->libelle }}</option>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}



                        {{--<div class="form-group form-float">--}}
                            {{--<div class="form-line{{ $errors->has('NomDomaines') ? ' has-error' : '' }}">--}}
                                {{--<input type="date" id="DateConsultations" name="DateConsultations" class="form-control" placeholder="DateConsultations">--}}
                                {{--@if ($errors->has('DateConsultations'))--}}
                                    {{--<span class="help-block">--}}
                                                {{--<strong>{{ $errors->first('DateConsultations') }}</strong>--}}
                                            {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}



                        {{--<input type="submit" id="save" value="Save" class="btn btn-primary">--}}
                        {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                    {{--</form>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>
@stop--}}




@section('script')
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        /*
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });*/










    </script>
    {!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/jquery.dataTables.js') !!}
    {!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') !!}
    {!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') !!}
    {!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') !!}
    {!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/jszip.min.js') !!}
    {!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/pdfmake.min.js') !!}
    {!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/vfs_fonts.js') !!}
    {!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') !!}
    {!! Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.print.min.js') !!}
    <script>
        $(function () {
            $('.js-exportable').DataTable({
                dom: 'Bfrtip',
                responsive: true,
                buttons: [
                    'copy',
                    'csv',
                    'excel',
                    {
                        extend:'pdf',
                        exportOptions:{
                            columns:"thead th:not(.noExport)"
                        }
                    },
                    'print'
                ]
            });
        });
    </script>

@endsection