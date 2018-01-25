@extends('documents.list_layout')

@section('list_title')
LISTE DES TEXTS ET LOIS
@stop

@section('list_content')
    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
        <thead>

        <tr>
            <th class="noExport">Action</th>
            <th>COTE</th>
            <th>TITRE</th>
            <th>AUTEURS</th>
            {{--<th>NBRE DISPONIBLE</th>--}}
            <th>Domaine</th>
            {{--<th>Sous Domaine</th>--}}
            {{--<th>NBRE EXEMPLAIRE INITIAL</th>--}}
            {{--<th>Categorie</th>--}}
            {{--<th>ISBN</th>--}}
            {{--<th>ISSN</th>--}}
            <th>NUMERO ENTREE</th>
            <th>NUMERO DECRET</th>
            {{--<th>ANNEE PUBLICATION</th>--}}
            {{--<th>EDITION</th>--}}
            {{--<th>ANNEE EDITION</th>--}}
            {{--<th>MAISON EDITION</th>--}}
            {{--<th>LARGEUR EDITION</th>--}}
            {{--<th>LONGUEUR EDITION</th>--}}
            {{--<th>ADESSE MAISON EDITION</th>--}}
            {{--<th>ILLUSTRATION</th>--}}
            {{--<th>PERIODICITE</th>--}}
            {{--<th>RELUIRE</th>--}}
        </tr>

        </thead>

        <tbody>
        {{--{{ dd($documentsauteur) }}--}}
        @foreach($documentsauteur as $document)
            <tr id="dossiers{{$document->id}}">
                <td>
                    {{--<button class="btn btn-xs btn-info" name="edit" id="edit" data-target="#add_data_Modal" data-id="{{ $document->id }}" title="voir"><i class="material-icons">list</i></button>--}}
                    {{--<button class="btn btn-xs btn-danger" data-id="{{ $document->id }}" title="Supprimer"><i class="material-icons">remove</i></button>--}}
                    <a class="btn btn-xs btn-info " href ="{{ action('ConsultationController@consulter', ['id' => $document->id]) }}" title="Consulter Cet Ouvrage"> <i class="material-icons">forum</i></a>
                    <a class="btn btn-xs btn-warning " href ="{{ action('EmpruntController@emprunt', ['id' => $document->id]) }}" title="Emprunter Cet Ouvrage"> <i class="material-icons">call_missed_outgoing</i></a>
                </td>
                <td>{{ $document->CoteDocuments }}</td>
                <td>{{ $document->TitreDocuments }}</td>
                <td>
                    {{ $document->Auteur }}
                </td>
                {{--<td>{{ $document->NbreExemplaireEdition - $document->nbre_emprunt }}</td>--}}
                <td>{{ $document->SousDomaines->Domaines->NomDomaines }}</td>
                {{--<td>{{ $document->SousDomaines->NomSousDomaines }}</td>--}}
                {{--<td>{{ $document->NbreExemplaireEdition }}</td>--}}
                {{--<td>{{ $document->Categories->libelle }}</td>--}}
                {{--<td>{{ $document->IsbnDocuments }}</td>--}}
                {{--<td>{{ $document->IssnDocuments }}</td>--}}
                <td>{{ $document->NumeroEntresDocuments }}</td>
                <td>{{ $document->NumeroDecret }}</td>
                {{--<td>{{ $document->AnneePublicationDocuments }}</td>--}}
                {{--<td>{{ $document->EditionsDocuments }}</td>--}}
                {{--<td>{{ $document->AnneeEditionDocuments }}</td>--}}
                {{--<td>{{ $document->MaisonEditionDocuments }}</td>--}}
                {{--<td>{{ $document->LargeurEditionDocuments }}</td>--}}
                {{--<td>{{ $document->LongueurEditionDocuments }}</td>--}}
                {{--<td>{{ $document->AdresseMaisonEdition }}</td>--}}
                {{--<td>{{ $document->IllustrationDocuments }}</td>--}}
                {{--<td>{{ $document->PeriodiciteDocuments }}</td>--}}
                {{--<td>{{ $document->ReliureDocuments }}</td>--}}

            </tr>
        @endforeach

        </tbody>

        <tfoot>

        <tr>
            <th class="noExport">Action</th>
            <th>COTE</th>
            <th>TITRE</th>
            <th>AUTEURS</th>
            {{--<th>NBRE DISPONIBLE</th>--}}
            <th>Domaine</th>
            {{--<th>Sous Domaine</th>--}}
            {{--<th>NBRE EXEMPLAIRE INITIAL</th>--}}
            {{--<th>Categorie</th>--}}
            {{--<th>ISBN</th>--}}
            {{--<th>ISSN</th>--}}
            <th>NUMERO ENTREE</th>
            <th>NUMERO DECRET</th>
            {{--<th>ANNEE PUBLICATION</th>--}}
            {{--<th>EDITION</th>--}}
            {{--<th>ANNEE EDITION</th>--}}
            {{--<th>MAISON EDITION</th>--}}
            {{--<th>LARGEUR EDITION</th>--}}
            {{--<th>LONGUEUR EDITION</th>--}}
            {{--<th>ADESSE MAISON EDITION</th>--}}
            {{--<th>ILLUSTRATION</th>--}}
            {{--<th>PERIODICITE</th>--}}
            {{--<th>RELUIRE</th>--}}
        </tr>
        </tfoot>

    </table>
@stop

