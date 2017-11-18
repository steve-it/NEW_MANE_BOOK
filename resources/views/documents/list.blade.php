@extends('page_model')

@section('css')
    {!! Html::style('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}

@stop

@section('main_content')
    <section class="content" style="width: 120%">
        <div class="col-sm-offset-4 col-sm-4" >
            <div class=" alert" ><span style="position: relative; left: -630px;  color: #2980b9; height: 50px; border: 1px solid inherit;">{!! session('ok') !!}</span></div>
        </div>
        <div class="container-fluid">

            <div class="block-header">
                <div class="table-responsive">

                    <div >
                        {!! link_to_route('creerDocuments', 'Ajouter un nouveau documents', [], ['class' => 'btn btn-large btn-primary', 'style' =>"position: absolute;  top: 80px; right: 120px;" ]) !!}
                    </div>

                </div>
            </div>
            <!-- Striped Rows -->




            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTE DES OUVRAGES DOCUMENTAIRES
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
                                        <th>Numero d'ordre</th>
                                        <th>Domaine</th>
                                        <th>Sous Domaine</th>
                                        <th>Categorie</th>
                                        <th>Titres</th>
                                        <th>ISBN</th>
                                        <th>ISSN</th>
                                        <th>NUMERO ENTREE</th>
                                        <th>ANNEE PUBLICATION</th>
                                        <th>EDITION</th>
                                        <th>ANNEE EDITION</th>
                                        <th>NBRE EXEMPLAIRE EDITION</th>
                                        <th>MAISON EDITION</th>
                                        <th>LARGEUR EDITION</th>
                                        <th>LONGUEUR EDITION</th>
                                        <th>ADESSE MAISON EDITION</th>
                                        <th>ILLUSTRATION</th>
                                        <th>PERIODICITE</th>
                                        <th>RELUIRE</th>
                                        <th>AUTEURS</th>
                                        <th class="noExport">Action</th>
                                    </tr>

                                    </thead>

                                    <tbody>

                                    @foreach($documents as $document)
                                        <tr id="dossiers{{$document->id}}">
                                            <td>{{ $document->NomDomaines }}</td>
                                            <td>{{ $document->NomSousDomaines }}</td>
                                            <td>{{ $document->libelle }}</td>
                                            <td>{{ $document->TitreDocuments }}</td>
                                            <td>{{ $document->IsbnDocuments }}</td>
                                            <td>{{ $document->IssnDocuments }}</td>
                                            <td>{{ $document->CoteDocuments }}</td>
                                            <td>{{ $document->NumeroEntresDocuments }}</td>
                                            <td>{{ $document->AnneePublicationDocuments }}</td>
                                            <td>{{ $document->EditionsDocuments }}</td>
                                            <td>{{ $document->AnneeEditionDocuments }}</td>
                                            <td>{{ $document->NbreExemplaireEdition }}</td>
                                            <td>{{ $document->MaisonEditionDocuments }}</td>
                                            <td>{{ $document->LargeurEditionDocuments }}</td>
                                            <td>{{ $document->LongueurEditionDocuments }}</td>
                                            <td>{{ $document->AdresseMaisonEdition }}</td>
                                            <td>{{ $document->IllustrationDocuments }}</td>
                                            <td>{{ $document->PeriodiciteDocuments }}</td>
                                            <td>{{ $document->ReliureDocuments }}</td>
                                            <td>{{ $document->NomAuteur }}</td>
                                            {{--<td>@foreach($document->Auteurs as $auteur)--}}
                                                    {{--{{ $auteur->NomAuteur }} <br>--}}
                                                {{--@endforeach--}}
                                            {{--</td>--}}
                                            <td>
                                                <button class="btn btn-xs btn-info" name="edit" id="edit" data-target="#add_data_Modal" data-id="{{ $document->id }}" title="voir"><i class="material-icons">list</i></button>
                                                <button class="btn btn-xs btn-danger" data-id="{{ $document->id }}" title="Supprimer"><i class="material-icons">remove</i></button>
                                                {{--<a class="btn btn-xs btn-warning " href ="{{ action('RenvoiController@edit', ['id' => $document->id]) }}" title="Renvoyez le dossier"> <i class="material-icons">call_missed_outgoing</i></a>--}}


                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                    <tfoot>

                                    <tr>
                                        <th>Numero d'ordre</th>
                                        <th>Domaine</th>
                                        <th>Sous Domaine</th>
                                        <th>Categorie</th>
                                        <th>Titres</th>
                                        <th>ISBN</th>
                                        <th>ISSN</th>
                                        <th>NUMERO ENTREE</th>
                                        <th>ANNEE PUBLICATION</th>
                                        <th>EDITION</th>
                                        <th>ANNEE EDITION</th>
                                        <th>NBRE EXEMPLAIRE EDITION</th>
                                        <th>MAISON EDITION</th>
                                        <th>LARGEUR EDITION</th>
                                        <th>LONGUEUR EDITION</th>
                                        <th>ADESSE MAISON EDITION</th>
                                        <th>ILLUSTRATION</th>
                                        <th>PERIODICITE</th>
                                        <th>RELUIRE</th>
                                        <th>AUTEURS</th>
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



@section('js')
    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });

        $('#add').on('click',function () {
            $('#save').val('save');
            $('#insert_form').trigger('reset');
            $('#add_data_Modal').modal('show');

        });





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
@stop