

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
                            {!! link_to_route('addEmprunts', 'Ajouter Un Emprunt', [], ['class' => 'btn btn-large btn-primary', 'style' =>"position: absolute;  top: 80px; right: 120px;" ]) !!}
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
                                LISTE DES EMPRUNTS
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
                                        <th>Date d'Emprunt</th>
                                        <th>Date Effectif de Retour</th>
                                        <th>Nom de l'Emprunteur</th>
                                        <th>Status de l'Emprunteur</th>
                                        <th class="noExport">Action</th>
                                    </tr>

                                    </thead>

                                    <tbody>

                                    @foreach($emprunts as $emprunt)
                                        <tr id="emprunts{{$emprunt->id}}">
                                            <td>{{ $emprunt->NomDomaines }}</td>
                                            <td>{{ $emprunt->NomSousDomaines }}</td>
                                            <td>{{ $emprunt->libelle }}</td>
                                            <td>{{ $emprunt->TitreDocuments }}</td>
                                            <td>{{ $emprunt->DateEmprunt }}</td>
                                            <td>{{ $emprunt->DateEffRetourEmprunt }}</td>
                                            <td>{{ $emprunt->NomEmprunteur }}</td>
                                            <td>{{ $emprunt->statusEmprunteur }}</td>

                                            <td>
                                                <button class="btn btn-xs btn-info" name="edit" id="edit" data-target="#add_data_Modal" data-id="{{ $emprunt->id }}"title="voir"><i class="material-icons">list</i></button>
                                                <button class="btn btn-xs btn-danger" data-id="{{ $emprunt->id }}" title="Supprimer"><i class="material-icons">remove</i></button>

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
                                        <th>Date d'Emprunt</th>
                                        <th>Date Effectif de Retour</th>
                                        <th>Nom de l'Emprunteur</th>
                                        <th>Status de l'Emprunteur</th>
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






@section('script')
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
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