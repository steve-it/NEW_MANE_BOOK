<?php 

namespace App\Http\Controllers;

use App\Documents;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Categorie;
use App\Domaine;
use App\Emprunt;
use App\SousDomaine;
use Illuminate\Support\Facades\DB;

class EmpruntController extends Controller 
{

    protected $Emprunts;

    public function __construct(Emprunt $emprunt)
    {
        $this->Emprunts = $emprunt;
    }
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $emprunts = DB::table('documents')
          ->join('categories', 'categories.id', '=', 'documents.categories_id')
          ->join('sousdomaines', 'sousdomaines.id', '=', 'documents.sousdomaines_id')
          ->join('domaines', 'domaines.id', '=', 'sousdomaines.domaines_id')
          ->join('emprunts','documents.id','=','emprunts.documents_id')
          //->where('emprunts.Date_Retour',null)
          ->get();


      return view('emprunts.list', compact('emprunts'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('emprunts.add',['documents'=>Documents::pluck('TitreDocuments','id')]);
  }


    public function emprunt(Request $r)
    {


        $ouvre =  DB::table('documents')
            ->where('documents.id', $r->id)
            ->select('documents.id', 'documents.TitreDocuments','documents.CoteDocuments')
            ->get();

        return view('emprunts.add1', ['ouvre'=> $ouvre[0] ]);
//   dd($dossier);

    }

    public function retouremprunt(Request $r)
    {


        $retour =  DB::table('documents')
            ->join('emprunts','documents.id','=','emprunts.documents_id')
            ->where('emprunts.id', $r->id)
            ->select('emprunts.*', 'documents.TitreDocuments')
            ->get();

        return view('emprunts.addretour', ['retouremprunt'=> $retour[0] ]);
//   dd($dossier);

    }
  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
      //dump($request);



      //update du nbreemprunt de l'ouvrage
      $nbre_emprunt_initial = DB::table('documents')
          ->where('documents.id', $request['document'])
          ->select('documents.*')
          ->get();
      //dump();

      $nbre_emprunt_actuel = $nbre_emprunt_initial[0]->nbre_emprunt;

      if($nbre_emprunt_actuel == $nbre_emprunt_initial[0]->NbreExemplaireEdition) {
          $stock =$nbre_emprunt_initial[0]->NbreExemplaireEdition - $nbre_emprunt_actuel;
          return view('emprunts.erreur',compact('stock'));

      }else{
          $nbre_emprunt = $nbre_emprunt_actuel + 1;

          DB::table('documents')
              ->where('id', $request['document'])
              ->update(['nbre_emprunt' => $nbre_emprunt]);
          //
          //

          $emprunt = new Emprunt([
              'NomEmprunteur'=>$request['NomEmprunteur'],
              'CniEmprunteur'=>$request['CniEmprunteur'],
              'DateEmprunt'=>$request['DateEmprunt'],
              'DateEffRetourEmprunt'=>$request['DateEffRetourEmprunt'],
              'ObservationEmprunt'=>$request['ObservationEmprunt'],
              'ObservationRetour'=>$request['ObservationRetour'],
              'statusEmprunteur'=>$request['destination'],
              'cautionEmprunteur'=>$request['prix'],
              'Date_Retour' => null,
              'documents_id' => $request['document']

          ]);
          $emprunt->save();


          // $emprunt->Documents()->attach($request->membre_id);

          return redirect('Emprunts')->withOk("Monsieur :" .$emprunt['NomEmprunteur']. " Vient d effectuer un Emprunt.");

      }


  }

  public function saveretour(Request $request)
  {


      }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request)
  {
    // dump($request);



      //update du nbreemprunt de l'ouvrage
      $nbre_emprunt_initial = DB::table('documents')
          ->join('emprunts','documents.id','=','emprunts.documents_id')
          ->where('emprunts.id', $request['idretouremprunt'])
          ->select('documents.*','emprunts.*')
          ->get();
     // dump($nbre_emprunt_initial);
      //'documents.nbre_emprunt' => $nbre_emprunt,

      $nbre_emprunt_actuel = $nbre_emprunt_initial[0]->nbre_emprunt;

      //dump($nbre_emprunt_actuel);


      if($nbre_emprunt_actuel>0) {
//          $stock =$nbre_emprunt_initial[0]->NbreExemplaireEdition - $nbre_emprunt_actuel;
//          return view('emprunts.erreur',compact('stock'));
   $nbre_emprunt_decrement = $nbre_emprunt_actuel - 1;
      DB::table('emprunts')
          ->where('emprunts.id', $request['idretouremprunt'])
          ->update(['emprunts.Date_Retour'=>$request['Date_Retour'],
              'ObservationRetour'=>$request['ObservationRetour']]);

      DB::table('documents')
          ->where('documents.id', $nbre_emprunt_initial[0]->documents_id)
          ->update(['documents.nbre_emprunt'=>$nbre_emprunt_decrement]);



      return redirect('Emprunts')->withOk("Un exemplaire de l'ouvrage de Titre :" .$nbre_emprunt_initial[0]->TitreDocuments. "a été retourner.");

      }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>