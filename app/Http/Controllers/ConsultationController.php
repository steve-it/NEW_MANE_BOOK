<?php 

namespace App\Http\Controllers;
use App\Consultation;
use App\Documents;
use App\SousDomaine;
use App\Domaine;
use App\Categorie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class ConsultationController extends Controller 
{


    protected $consultations;

    public function __construct(Consultation $consultation)
    {
        $this->consultations= $consultation;
    }

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $consultations = DB::table('documents')
          ->join('categories', 'categories.id', '=', 'documents.categories_id')
          ->join('sousdomaines', 'sousdomaines.id', '=', 'documents.sousdomaines_id')
          ->join('domaines', 'domaines.id', '=', 'sousdomaines.domaines_id')
          ->join('consultations', 'documents.id', '=', 'consultations.documents_id')

          ->get();


      return view('consultations.list', compact('consultations'));

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
      $documents = Documents::all();

      return view('consultations.add',compact(['domaines','categories','sousdomaines','documents']));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {


      $consultant = new Consultation([
          'DateConsultations' => $request['DateConsultations'],
          'documents_id' => $request['document']

      ]);
      $consultant->save();



     return Redirect::route('Consultations')->with("La consultation en Date de :"," a été ajoutée.");
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