
@extends('page_model')

@section('css')

@stop

@section('main_content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    SERVICE DOCUMENTATION
                </h2>
            </div>
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">domain</i>
                        </div>
                        <div class="content">
                            <div class="text">DOMAINE CONNAISSANCE</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">{{ $domaine }}</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="content">
                            <div class="text">NOMBRE OUVRAGE</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">{{ $documents }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">import_contacts</i>
                        </div>
                        <div class="content">
                            <div class="text">NOMBRE CONSULTATION</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">{{ $consultations }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">transfer_within_a_station</i>
                        </div>
                        <div class="content">
                            <div class="text">NOMBRE EMPRUNT</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">{{ $emprunts }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <div class="row clearfix">
                <!-- Basic Example -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>IMAGES ENAM</h2>
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
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="{{asset('uploads/photos_enam/logoenam.jpeg')}}"  />
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('uploads/photos_enam/entreeEnam.jpeg')}}" />
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('uploads/photos_enam/devantureenam.jpeg')}}" />
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Example -->
                <!-- With Captions -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>IMAGES ENAM</h2>
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
                            <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="{{asset('uploads/photos_enam/directeurenam.jpeg')}}" />
                                        <div class="carousel-caption">
                                            <h3>ENAM</h3>
                                            <p>L'École nationale d'administration et de la magistrature du Cameroun, créée à Yaoundé en 1959, est une grande école de l'enseignement supérieur ayant pour mission principale la formation </p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('uploads/photos_enam/paquisenam.jpeg')}}" />
                                        <div class="carousel-caption">
                                            <h3>ENAM</h3>
                                            <p>L'École nationale d'administration et de la magistrature du Cameroun, créée à Yaoundé en 1959, est une grande école de l'enseignement supérieur ayant pour mission principale la formation </p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('uploads/photos_enam/enam-formateurs.jpg')}}" />
                                        <div class="carousel-caption">
                                            <h3>ENAM</h3>
                                            <p>L'École nationale d'administration et de la magistrature du Cameroun, créée à Yaoundé en 1959, est une grande école de l'enseignement supérieur ayant pour mission principale la formation </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# With Captions -->
            </div>
        </div>
    </section>
@stop

@section('js')

    <script src={{asset("bower_components/adminbsb-materialdesign/js/demo.js")}}></script>


@endsection



