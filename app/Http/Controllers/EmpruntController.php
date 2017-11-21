<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Categorie;
use App\Domaine;
use App\Emprunt;
use App\SousDomaine;
use App\Http\Controllers\DB;
class EmpruntController extends Controller 
{

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
          ->join('emprunts', 'documents.id', '=', 'emprunts.documents_id')

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