<?php 

namespace App\Http\Controllers;

use App\Domaine;
use App\SousDomaine;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
class SousDomaineController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */

    protected $sousdomaines;

    public function __construct(SousDomaine $sousdomaines)
    {
        $this->sousdomaines = $sousdomaines;
    }


  public function index()
  {


      $sousdomaines = DB::table('sousdomaines')
          ->join('domaines','domaines.id','=','sousdomaines.domaines_id')
          ->get();
      /*  $sousdomaines = DB::table('domaines')
        ->join('sousdomaines','domaines.id','=','sousdomaines.domaines_id')
        ->get();*/




      //return view('sousdomaines.list', ['sousdomaines'=>$sousdomaines,'domaines'=>Domaine::pluck('NomDomaines', 'id')]);
      return view('sousdomaines.list', ['sousdomaines'=>$sousdomaines,'domaines'=>Domaine::all()]);
  }

    /***
     * Fonction permettant d'enregistrer un nouveau Domaines
     */

    public function NewSousDomaines(Request $request)
    {
        dump($_POST);
        echo "[".$request->NomSousDomaines.$request->domaines_id."]";

        if($request->ajax())
        {
            /*$sousdomaines = new SousDomaine();
            $sousdomaines->NomSousDomaines = $request->NomSousDomaines;
            $sousdomaines->save();*/

           $sousdomaines =  SousDomaine::create($request->all());
            return response()->json($sousdomaines);
        }
    }

    /***
     * Fin de la Fonction permettant d'enregistrer un nouveau Domaines
     */


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
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