<?php 

namespace App\Http\Controllers;

use App\Categorie;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategorieController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $categories = Categorie::all();
    return view('categories.list',compact('categories'));
  }


    /***
     * Fonction permettant d'enregistrer un nouveau Domaines
     */

    public function NewCategories(Request $request)
    {
        dump($_POST);
        echo "[".$request->libelle."]";
        if($request->ajax())
        {
            $categorie = new Categorie;

            $categorie->libelle = $request->input('libelle');
            $categorie->save();

            $categories =  Categorie::create($request->all());
            return response()->json($categories);
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