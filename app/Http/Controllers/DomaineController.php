<?php 

namespace App\Http\Controllers;

use App\Domaine;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\Exceptions;
use Illuminate\Http\JsonResponse;

class DomaineController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

      $domaines = Domaine::all();
      return view('domaines.list', compact('domaines'));
  }

    /***
     * Fonction permettant d'enregistrer un nouveau Domaines
     */

    public function NewDomaines(Request $request)
    {
       //dump($_POST);
        echo "[".$request->NomDomaines."]";
        if($request->ajax())
        {
            $domaines =  Domaine::create($request->all());
            return response()->json($domaines);
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
  public function create(Request $request)
  {
      if($request->ajax())
      {
          $domaines =  Domaine::create($request->all());
          return response()->json($domaines);
      }
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
    public function show(Request $request)
    {
        if($request->ajax())
        {
            $domaines =  Domaine::find($request->id);
            return Response($domaines);
        }
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

    public function UpdateDomaines(Request $request)
    {

        if($request->ajax())
        {
            //recuperation de la clé d'un enregistrement
            $domaines =  Domaine::find($request->id);

            // recuperation de champ modifier
            $domaines->NomDomaines = $request->NomDomaines;


            //enregistrement des modifications
            $domaines->save();

            return Response($domaines);
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

    public function delete(Request $request)
    {
        Domaine::destroy($request->id);
    }


}

?>