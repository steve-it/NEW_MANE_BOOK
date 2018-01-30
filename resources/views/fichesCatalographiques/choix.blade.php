@extends('page_model')

@section('css')
    {!! Html::style('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') !!}

@stop

@section('main_content')
    <section class="content">
        <div class="container" style="width: 90%;">
            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Créer des fiches catalographiques</h2>
                        </div>

                        <div class="body">
                            <form action="/fiches">
                                <div class="container-fluid">
                                    <p class="col-md-12">Entrez la periode pour laquelle vous souhaitez créer les fiches catalographique</p>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Debut de la période</label>
                                                <input type="text" required class="datetimepicker form-control" name="debut"
                                                        placeholder="Date/Heure de debut">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Fin de la période</label>
                                                <input type="text" required class="datetimepicker form-control" name="fin"
                                                        placeholder="Date/Heure de fin">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="col-md-3">
                                        <button class="btn btn-primary waves-effect">Valider</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop