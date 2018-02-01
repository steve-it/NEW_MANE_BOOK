@extends('page_model')

@section('css')
    {!! Html::style('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}

@stop

@section('main_content')
    <section class="content" style="width: 120%">
        <div class="container-fluid">

            <div class="block-header">
                <div class="table-responsive">

                    <div >
                        {!! link_to_route('creerDocuments', 'Ajouter Un Nouveau Document', [], ['class' => 'btn btn-large btn-primary', 'style' =>"position: absolute;  top: 80px; right: 120px;" ]) !!}
                    </div>

                </div>
            </div>
            <!-- Striped Rows -->

            <div class="row clearfix">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="header">
                            <h2>
                            @yield('list_title')
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                @yield('list_content')
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
                    /*  'copy',
                  'csv',
                    'excel',*/
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

        //------------------supprimer--------------------
        $('.btn-danger').click(function () {

            var value= $(this).data('id');
            var url = '{{ URL::to('deleteDcoument') }}';
            if(confirm("Voulez vous supprimer ce document ?")==true){

                $.ajax({type : 'get',  url : url, data : {'id':value}, success:function (data) {
                        console.log(data);
                        $('#document'+value).remove();

                    }
                });
            }

        });
    </script>
@stop
