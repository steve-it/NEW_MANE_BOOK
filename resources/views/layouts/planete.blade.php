
@extends('page_model')

@section('css')
<!-- JVectorMap Css -->
<link href={{asset("bower_components/adminbsb-materialdesign/plugins/jvectormap/jquery-jvectormap-1.2.2.css")}} rel="stylesheet">

@stop

@section('main_content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    PLANETE TERRE
                </h2>
            </div>
            <!-- Example -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CARTE DU MONDE
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
                            <div id="world-map-markers" class="jvector-map"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Example -->
        </div>
    </section>
@stop

@section('js')
    <!-- JVectorMap Plugin Js -->

    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}></script>
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}></script>
    <script src={{asset("bower_components/adminbsb-materialdesign/js/pages/maps/jvectormap.js")}}></script>

@endsection



