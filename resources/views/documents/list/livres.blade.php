{{--{{ dd($documentsauteur) }}--}}
@extends('documents.list_layout')

@section('list_title')
LISTE DES LIVRES
@stop

@section('list_content')
    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
        <thead>

        <tr>
            <th class="noExport">Action</th>
            <th>Cote</th>
            <th>Titre</th>
            <th>Auteurs</th>
            <th>Année de publication</th>
            {{--<th>NBRE DISPONIBLE</th>--}}
            <th>Domaine</th>
            <th>Sous domaine</th>
            {{--<th>NBRE EXEMPLAIRE INITIAL</th>--}}
            {{--<th>Categorie</th>--}}
            {{--<th>ISBN</th>--}}
            {{--<th>ISSN</th>--}}
            {{--<th>NUMERO ENTREE</th>--}}
            {{--<th>EDITION</th>--}}
            {{--<th>ANNEE EDITION</th>--}}
            {{--<th>MAISON EDITION</th>--}}
            {{--<th>LARGEUR EDITION</th>--}}
            {{--<th>LONGUEUR EDITION</th>--}}
            {{--<th>ADESSE MAISON EDITION</th>--}}
            <th class="noExport">Illustrastion</th>
            {{--<th>PERIODICITE</th>--}}
            <th class="noExport">Reliure</th>

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
                <td>{{ $document->CoteDocuments }}</td>
                <td>{{ $document->TitreDocuments }}</td>
                <td>
                    {{ $document->Auteur }}
                </td>
                <td>{{ $document->AnneePublicationDocuments }}</td>
                {{--<td>{{ $document->NbreExemplaireEdition - $document->nbre_emprunt }}</td>--}}
                <td>
                    @if($document->SousDomaines)
                        {{ $document->SousDomaines->Domaines->NomDomaines }}
                    @endif
                </td>
                <td>
                    @if($document->SousDomaines)
                        {{ $document->SousDomaines->NomSousDomaines }}
                    @endif
                </td>
                {{--<td>{{ $document->NbreExemplaireEdition }}</td>--}}
                {{--<td>{{ $document->Categories->libelle }}</td>--}}
                {{--<td>{{ $document->IsbnDocuments }}</td>--}}
                {{--<td>{{ $document->IssnDocuments }}</td>--}}
                {{--<td>{{ $document->NumeroEntresDocuments }}</td>--}}
                {{--<td>{{ $document->EditionsDocuments }}</td>--}}
                {{--<td>{{ $document->AnneeEditionDocuments }}</td>--}}
                {{--<td>{{ $document->MaisonEditionDocuments }}</td>--}}
                {{--<td>{{ $document->LargeurEditionDocuments }}</td>--}}
                {{--<td>{{ $document->LongueurEditionDocuments }}</td>--}}
                {{--<td>{{ $document->AdresseMaisonEdition }}</td>--}}
                <td>{{ $document->IllustrationDocuments }}</td>
                {{--<td>{{ $document->PeriodiciteDocuments }}</td>--}}
                <td>{{ $document->ReliureDocuments }}</td>

            </tr>
        @endforeach
        {{--{{ die }}--}}

        </tbody>

        <tfoot>

        <tr>
            <th class="noExport">Action</th>
            <th>Cote</th>
            <th>Titre</th>
            <th>Auteurs</th>
            <th>Année de publication</th>
            {{--<th>NBRE DISPONIBLE</th>--}}
            <th>Domaine</th>
            <th>Sous domaine</th>
            {{--<th>NBRE EXEMPLAIRE INITIAL</th>--}}
            {{--<th>Categorie</th>--}}
            {{--<th>ISBN</th>--}}
            {{--<th>ISSN</th>--}}
            {{--<th>NUMERO ENTREE</th>--}}
            {{--<th>EDITION</th>--}}
            {{--<th>ANNEE EDITION</th>--}}
            {{--<th>MAISON EDITION</th>--}}
            {{--<th>LARGEUR EDITION</th>--}}
            {{--<th>LONGUEUR EDITION</th>--}}
            {{--<th>ADESSE MAISON EDITION</th>--}}
            <th class="noExport">Illustrastion</th>
            {{--<th>PERIODICITE</th>--}}
            <th class="noExport">Reliure</th>
        </tr>
        </tfoot>

    </table>
@stop

