@extends('documents.list_layout')

@section('list_title')
LISTE DES MEMOIRES
@stop

@section('list_content')
    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
        <thead>

        <tr>
            <th class="noExport">Action</th>
            <th>N°</th>
            <th>COTE</th>
            <th>SECTION</th>
            <th>TITRE</th>
            <th>AUTEURS</th>
            <th title="Année de publication">Année</th>
        </tr>

        </thead>

        <tbody>
        {{--{{ dd($documentsauteur) }}--}}
        @foreach($documentsauteur as $document)
            <tr id="document{{$document->id}}">
                <td>
                    {{--<button class="btn btn-xs btn-info" name="edit" id="edit" data-target="#add_data_Modal" data-id="{{ $document->id }}" title="voir"><i class="material-icons">list</i></button>--}}
                    {{--<button class="btn btn-xs btn-danger" data-id="{{ $document->id }}" title="Supprimer"><i class="material-icons">remove</i></button>--}}
                    <a class="btn btn-xs btn-info " href ="{{ action('ConsultationController@consulter', ['id' => $document->id]) }}" title="Consulter Cet Ouvrage"> <i class="material-icons">forum</i></a>
                    <a class="btn btn-xs btn-warning " href ="{{ action('EmpruntController@emprunt', ['id' => $document->id]) }}" title="Emprunter Cet Ouvrage"> <i class="material-icons">call_missed_outgoing</i></a>
                    <a class="btn btn-xs btn-info"  href ="{{ action('DocumentsController@edit', ['id' => $document->id]) }}" title="Modifier le dossier" ><i class="material-icons">create</i></a>
                    <a class="btn btn-xs btn-danger" data-id="{{  $document->id }}" title="Supprimer le document"><i class="material-icons">clear</i></a>
                </td>
                <td>{{ isset($i)? ++$i : $i=1 }}</td>
                <td>{{ $document->CoteDocuments }}</td>
                <td>{{ $document->Section }}</td>
                <td>{{ $document->TitreDocuments }}</td>
                <td>
                {{ $document->Auteur }}
                </td>
                <td>{{ $document->AnneePublicationDocuments }}</td>
                </tr>
        @endforeach

        </tbody>

        <tfoot>

        <tr>
            <th class="noExport">Action</th>
            <th>N°</th>
            <th>COTE</th>
            <th>SECTION</th>
            <th>TITRE</th>
            <th>AUTEURS</th>
            <th title="Année de publication">Année</th>
        </tr>
        </tfoot>

    </table>
@stop
