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
          ->join('documents_emprunts', 'documents.id', '=', 'documents_emprunts.documents_id')
          ->join('emprunts', 'emprunts.id', '=', 'documents_emprunts.emprunts_id')

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

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

      $emprunt = new Emprunt([
          'NomEmprunteur'=>$request['NomEmprunteur'],
          'CniEmprunteur'=>$request['CniEmprunteur'],
          'DateEmprunt'=>$request['DateEmprunt'],
          'DateEffRetourEmprunt'=>$request['DateEffRetourEmprunt'],
          'ObservationEmprunt'=>$request['ObservationEmprunt'],
          'ObservationRetour'=>$request['ObservationRetour'],
          'statusEmprunteur'=>$request['destination'],
          'cautionEmprunteur'=>$request['prix']

      ]);
      $emprunt->save();


      $emprunt->Documents()->attach($request->membre_id);

      return redirect('Emprunts')->withOk("Monsieur :" .$emprunt->NomEmprunteur. " Vient d effectuer un Emprunt.");
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
  public function update($id)
  {
    
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