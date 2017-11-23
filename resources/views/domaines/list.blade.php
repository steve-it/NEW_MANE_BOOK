
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
                        <button type="button" name="add" id="add" class="btn btn-warning" title="Ajouter"><i class="material-icons">add_box</i></button>
                    </div>
                </div>
            </div>
            <!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LISTE DES DOMAINES
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
                                        <th>Nom Domaines</th>
                                        <th class="noExport">Action</th>
                                    </tr>

                                    </thead>

                                    <tbody>

                                    @foreach($domaines as $domaine)
                                        <tr id="domaines{{$domaine->id}}">
                                            <td>{{ $domaine->NomDomaines }}</td>

                                            <td>
                                                <button class="btn btn-xs btn-info" name="edit" id="edit" data-target="#add_data_Modal" data-id="{{ $domaine->id }}"title="voir"><i class="material-icons">list</i></button>
                                                <button class="btn btn-xs btn-danger" data-id="{{ $domaine->id }}" title="Supprimer"><i class="material-icons">remove</i></button>

                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                    <tfoot>

                                    <tr>
                                        <th>Nom du Domaine</th>
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

@section('modal_content')

    <div id="add_data_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Informations du Domaines </h4>
                </div>
                <div class="modal-body">
                    <form id="insert_form" method="POST" action="NouveauDomaines" >
                        {{ csrf_field() }}

                        <!-- champ cache -->
                        <input type="hidden"  id="domaineid" name="id">

                        <!-- champ NomDomaines -->
                        <div class="form-group form-float">
                            <div class="form-line{{ $errors->has('NomDomaines') ? ' has-error' : '' }}">
                                <input type="text" id="NomDomaines" name="NomDomaines" class="form-control" placeholder="Nom du Domaines">
                                @if ($errors->has('NomDomaines'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('NomDomaines') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>



                        <input type="submit" id="save" value="Save" class="btn btn-primary">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop





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

        $('#add').on('click',function () {
            console.log('add-click', 'ça passe');

            $('#add_data_Modal').modal('show');
            $('#save').val('save');
            $('#insert_form').trigger('reset');



            $('#insert_form').on('submit', function (e) {
                e.preventDefault();
                var url = $('#insert_form').attr('action');
                var data = $('#insert_form').serialize();
                var type = 'POST';
                var statut = $('#save').val();

                if( statut == 'modifier')
                {
                    type = 'PUT';
                    //data += '&id='+$(this).data('id');
                }
                if($('#NomDomaines').val()=='')
                {
                    alert("NomDomaines is requred");
                }
                else
                {

                    $.ajax({
                        type: type,
                        url: url,
                        data: data,
                        success:function (data) {
                            console.log(data);
                            /*$('#insert_form')[0].reset();
                             $('#add_data_Modal').modal('hide');
                             $('#membre_table').html(data);*/

                            var row = '<tr id="domaines'+ data.id+'" >' +
                                '<td>' + data.NomDomaines + '</td>' +
                                '<td>' +
                                '<button class="btn btn-xs btn-info" data-id="' + data.id + '" title="voir"><i class="material-icons">list</i></button> ' +
                                '<button class="btn btn-xs btn-danger" data-id="' + data.id + '"title="Supprimer"><i class="material-icons">remove</i></button>'+
                                '</td>'+
                                '</tr>';
                            if (statut == 'save') {
                                $('tbody').prepend(row);
                            }
                            else
                            {
                                $('#domaines'+ data.id).replaceWith(row);
                                $('#add_data_Modal').modal('hide');

                            }

                        }

                    });



                    //---------reset_formulaire--------------------
                   //

                }
                $('#add').trigger('reset');

            });

            });





        //--------update-------------------------------
        $('tbody').delegate('.btn-info','click',function () {

            var value = $(this).data('id');
            var url = '{{ URL::to('listDomaines') }}';

            // alert(value);

            $.ajax({
                type : 'get',
                url : url,
                data : {'id':value},

                success:function (data) {
                    $('#NomDomaines').val(data.NomDomaines);
                    $('#domaineid').val(data.id);
                    $('#save').val('modifier');
                    $('#add_data_Modal').modal('show');

                },error:function(){
                    alert("error!!!!");
                }

            });

        });

        //------------------supprimer--------------------
        $('tbody').delegate('.btn-danger','click',function () {

            var value= $(this).data('id');
            var url = '{{ URL::to('deleteDomaines') }}';
            //alert(value);
            if(confirm("etez vous sure de vouloir Supprimer")==true){

                $.ajax({
                    type : 'post',
                    url : url,
                    data : {'id':value},
                    success:function () {
                    $('#domaines'+value).remove();

                }
                });
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