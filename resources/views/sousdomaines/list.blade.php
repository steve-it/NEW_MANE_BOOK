
@extends('page_model')

@section('css')
    <style>
        html{
            overflow-y : scroll;
        }
    </style>
    {!! Html::style('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}
    <!-- Bootstrap Select Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap-select/css/bootstrap-select.css")}} rel="stylesheet">
    <!-- Wait Me Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/waitme/waitMe.css")}} rel="stylesheet">

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
                                LISTE DES SOUS-DOMAINES
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>

                                    <tr>
                                        <th>Domaines</th>
                                        <th>Sous Domaines</th>
                                        <th class="noExport">Action</th>
                                    </tr>

                                    </thead>

                                    <tbody>

                                    @foreach($sousdomaines as $sousdomaine)
                                        <tr id="sousdomaines{{$sousdomaine->id}}">
                                            <td>{{ $sousdomaine->NomDomaines }}</td>
                                            <td>{{ $sousdomaine->NomSousDomaines }}</td>



                                            <td>
                                                <button class="btn btn-xs btn-info" name="edit" id="edit" data-target="#add_data_Modal" data-id="{{ $sousdomaine->id }}"title="voir"><i class="material-icons">list</i></button>
                                                <button class="btn btn-xs btn-danger" data-id="{{ $sousdomaine->id }}" title="Supprimer"><i class="material-icons">remove</i></button>

                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>

                                    <tfoot>

                                    <tr>
                                        <th>Domaines</th>
                                        <th>Sous Domaines</th>
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
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <center>  <h4 class="modal-title">Informations Sous Domaines de Domaines </h4></center>
                </div>
                <div class="modal-body">
                    <form id="insert_form" method="POST" action="Nouveausousdomaines" >
                        {{ csrf_field() }}
                        <input type="hidden" id="sousdomainesid" name="id">
                        <h3> Choix Du Domaine</h3>

                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                {{--{{ Form::select('domaines_id', $domaines, null, ['id'=>'id', 'class'=>'form-control', 'placeholder' =>'-- Choisir --']) }}--}}
                                <select class="form-control show-tick" name="domaines_id" id="domaines_id">
                                    <option value="">---------SVP Selectionner le domaine --</option>
                                    @foreach($domaines as $domaine)
                                        <option value="{{ $domaine->id }}">{{ $domaine->NomDomaines }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line{{ $errors->has('NomSousDomaines') ? ' has-error' : '' }}">
                                <input type="text" id="NomSousDomaines" name="NomSousDomaines" class="form-control" placeholder="Nom Sous Domaine">
                                @if ($errors->has('NomSousDomaines'))
                                    <span class="help-block">
                                                <strong>{{ $errors->first('NomSousDomaines') }}</strong>
                                            </span>
                                @endif
                            </div>
                        </div>

                        <input type="submit" id="save" value="Save" class="btn btn-primary">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>
                </div>
                {{----}}
            </div>
        </div>
    </div>
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

                //alert(data);
                if( statut == 'modifier')
                {
                    type = 'PUT';
                    //data += '&id='+$(this).data('id');
                }
                if($('#NomSousDomaines').val()=='')
                {
                    alert("Name SousDomaines is requred");
                }
                else
                {

                    $.ajax({
                        type: type,
                        url: url,
                        data: data,
                        success:function (data) {
                            console.log(data);
                            // var domain = $('#domaines_id').value;

                            /*$('#insert_form')[0].reset();
                             $('#add_data_Modal').modal('hide');
                             $('#membre_table').html(data);*/

                            var row = '<tr id="sousdomaines'+ data.id+'" >' +
                                '<td>' + $('#domaines_id > option[value='+data.domaines_id+']').text()  + '</td>' +
                                '<td>' + data.NomSousDomaines + '</td>' +
                                '<td>' +
                                '<button class="btn btn-xs btn-info" data-id="' + data.id + '" title="voir"><i class="material-icons">list</i></button> ' +
                                '<button class="btn btn-xs btn-danger" data-id="' + data.id + '"title="Supprimer"><i class="material-icons">remove</i></button>'+
                                '</td>' +
                                '</tr>';
                            if (statut == 'save') {
                                $('tbody').prepend(row);
                            }
                            else
                            {
                                $('#sousdomaines'+ data.id).replaceWith(row);
                                $('#add_data_Modal').modal('hide');
                            }


                        }

                    });



                    //---------reset_formulaire--------------------
                    $(this).trigger('reset');
                }

            });



        });




        //--------update-------------------------------
        $('tbody').delegate('.btn-info','click',function () {

            var value = $(this).data('id');
            var url = '{{ URL::to('listMembers') }}';

            // alert(value);

            $.ajax({
                type : 'get',
                url : url,
                data : {'id':value},

                success:function (data) {
                    $('#nom').val(data.nom);
                    $('#telephone').val(data.telephone);
                    $('#grade').val(data.grade);
                    $('#memberid').val(data.id);
                    $('#save').val('modifier');
                    $('#add_data_Modal').modal('show');

                }

            });

        });

        //------------------supprimer--------------------
        $('tbody').delegate('.btn-danger','click',function () {

            var value= $(this).data('id');
            var url = '{{ URL::to('deleteSousdomaines') }}';
            if(confirm("etez vous sure de vouloir Supprimer")==true){

                $.ajax({type : 'post',  url : url, data : {'id':value}, success:function () {
                    $('#sousdomaines'+value).remove();

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