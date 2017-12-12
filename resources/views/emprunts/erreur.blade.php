
@extends('page_model')

@section('css')

    {!! Html::style('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}

@stop

@section('main_content')

    <!-- Dismissible Alerts -->
    <div class="row clearfix col-md-offset-3">
        <br><br><br><br><br><br>
        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 ">
            <div class="card">
                <div class="header">
                    <h2>
                        Alert de Stock
                        <small>le stock de ce document est de:<code>{{ $stock }}</code> dans les rayons.</small>
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
                    {{--<div class="alert alert-warning alert-dismissible" role="alert">--}}
                        {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                        {{--Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id--}}
                    {{--</div>--}}
                    {{--<div class="alert bg-pink alert-dismissible" role="alert">--}}
                        {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                        {{--Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id--}}
                    {{--</div>--}}
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Imposible d'effectuer un emprunt de ce Document : Stock indisponible.     <u><strong>Merci de réapprovissioner le stock</strong></u>
                    </div>
                    {{--<div class="alert bg-green alert-dismissible" role="alert">--}}
                        {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                        {{--Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Dismissible Alerts -->
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
    </script>



@endsection