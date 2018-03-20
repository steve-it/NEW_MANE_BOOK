<?php

namespace App\Http\Controllers;

use App\Auteur;
use App\Categorie;
use App\Domaine;
use App\SousDomaine;
use App\Documents;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class DocumentsController extends Controller
{


    protected $documents;

    public function __construct(Documents $document)
    {
        $this->documents = $document;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Documents::with('Categories')
            //->join('categories', 'categories.id', '=', 'documents.categories_id')
            ->with('SousDomaines');
        //->join('sousdomaines', 'sousdomaines.id', '=', 'documents.sousdomaines_id')
        //->join('domaines', 'domaines.id', '=', 'sousdomaines.domaines_id')

        $vue = 'documents.list.generale'; //vue gennerale
        if (isset($request['cat'])) {
            $query->where('categories_id', '=', $request->cat);

            if ($request->cat == 1) $vue = 'documents.list.memoires';
            if ($request->cat == 2) $vue = 'documents.list.revues';
            if ($request->cat == 3) $vue = 'documents.list.texts';
            if ($request->cat == 4) $vue = 'documents.list.livres';
        }

        $documentsauteur = $query->get();

        return view($vue, compact('documentsauteur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $domaines = Domaine::all();
        $categories = Categorie::all();
        $sousdomaines = SousDomaine::all();

        $buildOption = $this->makeOptionBuilder();

        $document = new Documents();

        //dd($document['TitreDocuments']);

        return view('documents.simpleadd', compact(['domaines', 'categories', 'sousdomaines', 'buildOption', 'document']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        if(Documents::count() > 200) {
            return response()->view('errors.503', [], 503);
        }

    //tester de renseignement d'un nouveau Domaine inexistant dans la liste de selection
    if(isset($request->Nouveaudomains))
    {
        $newdomaines = new Domaine([
            'NomDomaines' => $request['Nouveaudomains']
        ]);
        $newdomaines->save();

        $request['domaine']= $newdomaines->id;
    }


        // tester de renseignement d'un nouveau Sous-Domaine inexistant dans la liste de selection
        if (isset($request->NouveauSousdomains)){
            $sousdomaines = new SousDomaine([
                'domaines_id' => $request['domaine'],
                'NomSousDomaines' => $request['NouveauSousdomains']
            ]);

            $sousdomaines->save();

            $request['sousdomaine'] = $sousdomaines->id;
        }
        //fin

        if (isset($request->id)) {
            $doc = Documents::find($request->id);
//            dd($request->id);
            if (isset($request->TitreDocuments)) {
                $doc->TitreDocuments = $request->TitreDocuments;
            }
            if (isset($request->IsbnDocuments)) {
                $doc->IsbnDocuments = $request->IsbnDocuments;
            }
            if (isset($request->IssnDocuments)) {
                $doc->IssnDocuments = $request->IssnDocuments;
            }
            if (isset($request->CoteDocuments)) {
                $doc->CoteDocuments = $request->CoteDocuments;
            }
            if (isset($request->NumeroEntresDocuments)) {
                $doc->NumeroEntresDocuments = $request->NumeroEntresDocuments;
            }
            if (isset($request->AnneePublicationDocuments)) {
                $doc->AnneePublicationDocuments = $request->AnneePublicationDocuments;
            }
            if (isset($request->EditionsDocuments)) {
                $doc->EditionsDocuments = $request->EditionsDocuments;
            }
            if (isset($request->EditeurDocuments)) {
                $doc->EditeurDocuments = $request->EditeurDocuments;
            }
            if (isset($request->NbreExemplaireEdition)) {
                $doc->NbreExemplaireEdition = $request->NbreExemplaireEdition;
            }
            if (isset($request->DateEditionDocuments)) {
                $doc->DateEditionDocuments = $request->DateEditionDocuments;
            }
            if (isset($request->LieuEditionDocuments)) {
                $doc->LieuEditionDocuments = $request->LieuEditionDocuments;
            }
            if (isset($request->MaisonEditionDocuments)) {
                $doc->MaisonEditionDocuments = $request->MaisonEditionDocuments;
            }
            if (isset($request->LongueurEditionDocuments)) {
                $doc->LongueurEditionDocuments = $request->LongueurEditionDocuments;
            }
            if (isset($request->AdresseMaisonEdition)) {
                $doc->AdresseMaisonEdition = $request->AdresseMaisonEdition;
            }
            if (isset($request->IllustrationDocuments)) {
                $doc->IllustrationDocuments = $request->IllustrationDocuments;
            }
            if (isset($request->PeriodiciteDocuments)) {
                $doc->PeriodiciteDocuments = $request->PeriodiciteDocuments;
            }
            if (isset($request->origine)) {
                $doc->origine = $request->origine;
            }
            if (isset($request->ReliureDocuments)) {
                $doc->ReliureDocuments = $request->ReliureDocuments;
            }
            if (isset($request->Section)) {
                $doc->Section = $request->Section;
            }
            if (isset($request->Auteur)) {
                $doc->Auteur = $request->Auteur;
            }
            if (isset($request->NumeroDecret)) {
                $doc->NumeroDecret = $request->NumeroDecret;
            }
            if (isset($request->categories_id)) {
                $doc->categories_id = $request->categories_id;
            }

            if (isset($request->sousdomaine) && $request->sousdomaine != $doc->sousdomaines_id) {
                $doc->sousdomaines_id = (int)$request->sousdomaine;
            }
        } else {
            //dd($request->all());
            $doc = new Documents([
                'TitreDocuments' => $request['TitreDocuments'],
                'IsbnDocuments' => $request['IsbnDocuments'],
                'IssnDocuments' => $request['IssnDocuments'],
                'CoteDocuments' => $request['CoteDocuments'],
                'Section' => $request['Section'],
                'Auteur' => $request['Auteur'],
                'pagination' => (int) $request['pagination'],
                'NumeroDecret' => $request['NumeroDecret'],
                'DateEditionDocuments' => $request['DateEditionDocuments'],
                'LieuEditionDocuments' => $request['LieuEditionDocuments'],
                'EditeurDocuments' => $request['EditeurDocuments'],
                'NumeroEntresDocuments' => $request['NumeroEntresDocuments'],
                'AnneePublicationDocuments' => $request['AnneePublicationDocuments'],
                'EditionsDocuments' => $request['EditionsDocuments'],
                'NbreExemplaireEdition' => $request['NbreExemplaireEdition'],
                'MaisonEditionDocuments' => $request['MaisonEditionDocuments'],
                'LongueurEditionDocuments' => $request['LongueurEditionDocuments'],
                'AdresseMaisonEdition' => $request['AdresseMaisonEdition'],
                'IllustrationDocuments' => $request['IllustrationDocuments'],
                'PeriodiciteDocuments' => $request['PeriodiciteDocuments'],
                'ReliureDocuments' => $request['ReliureDocuments'],
                'origine' => $request['origine'],

                'categories_id' => $request['categories_id'],
                'sousdomaines_id' => $request['sousdomaine'],
            ]);
        }




        $doc->save();

        return redirect('NewDocuments')->withOk((isset($request->id)) ? '<strong>' . $doc->TitreDocuments . '</strong> a été modifié.' : '<strong>' . $doc->TitreDocuments . '</strong> a été enregistré.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Request $r)
    {
        $document = Documents::with('Categories')
            ->with('SousDomaines')
            ->where('id', '=', $r->id)
            ->get()[0];

        $domaines = Domaine::all();
        $categories = Categorie::all();
        $sousdomaines = SousDomaine::all();

        $buildOption = $this->makeOptionBuilder($document->Section);

        return view('documents.simpleadd', compact(['document', 'domaines', 'categories', 'sousdomaines', 'buildOption']));
    }

    public function makeOptionBuilder($targetValue = false)
    {
        return function ($text) use ($targetValue) {
            $selectionValue = ($targetValue && $targetValue == $text) ? 'selected' : '';
            return "<option value='$text' $selectionValue>$text</option>";
        };
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Request $r)
    {
        dd($r->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function cities($id)
    {
        // Retour des villes pour le pays sélectionné
        return SousDomaine::whereDomainesId($id)->get();


    }

    //fonction autocomplete

    /*public function dataAjax(Request $request)
    {

        $query = $request->get('term', '');

        $products = Documents::where('Auteur', 'LIKE', '%' . $query . '%')->get();

        $data = array();
        foreach ($products as $product) {
            $data[] = array('value' => $product->NomAuteur, 'id' => $product->id);
        }
        if (count($data))
            return $data;
        else
            return ['value' => 'No Result Found', 'id' => ''];
    }*/


    public function destroy(Request $r)
    {
        $document = Documents::find($r->id);
        $document->delete();
        return redirect()->back();
    }
}










?>
