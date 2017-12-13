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
        $this->documents= $document;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

       /* $dossierCorrectionnels = $this->dossierCorrectionnel
            ->with('membres_tribunal')
            ->orderBy('dossiers_correctionnels.created_at', 'desc')
            ->paginate(4);
        $links = $dossierCorrectionnels->setPath('')->render();
        return view('dossiers.list', compact('dossierCorrectionnels', 'links'));*/


        $documentsauteur = Documents::with('Auteurs')
            ->with('Categories')
            //->join('categories', 'categories.id', '=', 'documents.categories_id')
            ->with('SousDomaines')
            //->join('sousdomaines', 'sousdomaines.id', '=', 'documents.sousdomaines_id')
            //->join('domaines', 'domaines.id', '=', 'sousdomaines.domaines_id')
            ->get();

        //dump($documentsauteur);

        // dump($documentsauteur);

      /*  $documents = DB::table('documents')
            ->join('categories', 'categories.id', '=', 'documents.categories_id')
            ->join('sousdomaines', 'sousdomaines.id', '=', 'documents.sousdomaines_id')
            ->join('domaines', 'domaines.id', '=', 'sousdomaines.domaines_id')
            ->join('auteurs_documents', 'documents.id', '=', 'auteurs_documents.documents_id')
            ->join('auteurs', 'auteurs.id', '=', 'auteurs_documents.auteurs_id')

            ->get();*/

        return view('documents.list', compact('documentsauteur'));

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
        $auteurs = Auteur::all();
        $sousdomaines = SousDomaine::all();
        $auteurs = Auteur::pluck('NomAuteur','id');
        return view('documents.simpleadd', compact(['auteurs','domaines', 'categories','auteurs','sousdomaines']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $ouvrage = new Documents([
            'TitreDocuments' => $request['TitreDocuments'],
            'IsbnDocuments' => $request['IsbnDocuments'],
            'IssnDocuments' => $request['IssnDocuments'],
            'CoteDocuments' => $request['CoteDocuments'],
            'NumeroEntresDocuments' => $request['NumeroEntresDocuments'],
            'AnneePublicationDocuments' => $request['AnneePublicationDocuments'],
            'EditionsDocuments' => $request['EditionsDocuments'],
            'NbreExemplaireEdition' => $request['NbreExemplaireEdition'],
            'AnneeEditionDocuments' => $request['AnneeEditionDocuments'],
            'MaisonEditionDocuments' => $request['MaisonEditionDocuments'],
            'LargeurEditionDocuments' => $request['LargeurEditionDocuments'],
            'LongueurEditionDocuments' => $request['LongueurEditionDocuments'],
            'AdresseMaisonEdition' => $request['AdresseMaisonEdition'],
            'IllustrationDocuments' => $request['IllustrationDocuments'],
            'PeriodiciteDocuments' => $request['PeriodiciteDocuments'],
            'ReliureDocuments' => $request['ReliureDocuments'],
            'categories_id' => $request['categories_id'],
            'sousdomaines_id' => $request['sousdomaine'],
        ]);

        $ouvrage->save();

//    $membres = MembreTribunal::find($request->membre_id);
//    $dossier->membres_tribunal()->save($membres);
        $ouvrage->Auteurs()->attach($request->idauteur);

       return redirect('documents')->withOk("le document ayant pour titre:" . $ouvrage->TitreDocuments. " a été créé.");

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
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {

    }


    public function cities($id)
    {
        // Retour des villes pour le pays sélectionné
        return SousDomaine::whereDomainesId($id)->get();


    }

    //fonction autocomplete

    public function dataAjax(Request $request)
    {

        $query = $request->get('term','');

        $products=Auteur::where('NomAuteur','LIKE','%'.$query.'%')->get();

        $data=array();
        foreach ($products as $product) {
            $data[]=array('value'=>$product->NomAuteur,'id'=>$product->id);
        }
        if(count($data))
            return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }





}




?>
