<?php
//use Illuminate\Support\Facades\DB;
//use App\SousDomaine;
//use \Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\DB;
use App\Categorie;
use App\Domaine;
use App\SousDomaine;
use App\Documents;

Route::get('/','ParametrageController@acceuil');
/*Route::get('/',function (){


   $DocParDomaines = DB::table('documents')
        //->join('sousdomaines', 'documents.categories_id', '=', 'sousdomaines.id')
       ->join('sousdomaines', 'documents.sousdomaines_id', '=', 'sousdomaines.id')
       ->join('domaines','sousdomaines.domaines_id','=','domaines.id')
       ->select('domaines.NomDomaines','sousdomaines.NomSousDomaines', DB::raw('count(sousdomaines.id) as DocParCat'))
       ->groupBy('sousdomaines.NomSousDomaines')
       ->get();

});*/



//// Route in auteurs /////////////////////////////////////////////


Route::get('/Auteurs', 'AuteurController@index');

Route::post('/Nouveauauteurs', 'AuteurController@Newauteurs');

Route::put('/Nouveauauteurs', 'AuteurController@Updateauteurs');

Route::get('/listauteurs', 'AuteurController@show');

Route::post('/deleteauteurs', 'AuteurController@delete');


//// Fin Route in SousDomaines ////////////////////////////////////////////
///

//// Route in Domaines /////////////////////////////////////////////


/*Route::group(['middleware' => ['auth']], function() {

    Route::get('/domaines', 'DomaineController@index');

    Route::post('/NouveauDomaines', 'DomaineController@NewDomaines');

    Route::put('/NouveauDomaines', 'DomaineController@UpdateDomaines');

    Route::get('/listDomaines', 'DomaineController@show');

    Route::post('/deleteDomaines', 'DomaineController@delete');
});*/


    Route::get('/domaines', 'DomaineController@index');

    Route::post('/NouveauDomaines', 'DomaineController@NewDomaines');

    Route::put('/NouveauDomaines', 'DomaineController@UpdateDomaines');


    Route::get('/listDomaines', 'DomaineController@show');

    Route::post('/deleteDomaines', 'DomaineController@delete');


//// Fin Route in Domaines /////////////////////////////////////////////
///
///
//// Route in SousDomaines /////////////////////////////////////////////


    Route::get('/sousdomaines', 'SousDomaineController@index');

    Route::post('/Nouveausousdomaines', 'SousDomaineController@NewSousDomaines');
     Route::post('/deleteSousdomaines', 'SousDomaineController@delete');

    /*Route::put('/Nouveausousdomaines', 'SousDomaineController@UpdateDomaines');

    Route::get('/listsousdomaines', 'SousDomaineController@show');

  */


//// Fin Route in SousDomaines ///////////////////////////////////////////////// Fin Route in Domaines /////////////////////////////////////////////
///
///
///
//// Route in Categories /////////////////////////////////////////////


    Route::get('/categories', 'CategorieController@index');

    Route::post('/Nouveaucategories', 'CategorieController@NewCategories');

    Route::put('/Nouveaucategories', 'CategorieController@UpdateCategories');

    Route::get('/listcategories', 'CategorieController@show');

    Route::post('/deletecategories', 'CategorieController@delete');


//// Fin Route in SousDomaines ////////////////////////////////////////////
///
///
/// ///// Route in Documents /////////////////////////////////////////////


Route::get('/documents', 'DocumentsController@index');

Route::get('/Selectsousdomaine',function (){

  /*  $dom_id = Input::get('iddomain');
    $domainesous = SousDomaine::where('domaines_id','=',$dom_id)->get();

    $select = null;
$select .= "<option>-----------------------------------</option>";
    foreach($domainesous as $data){
        $select .= "<option value=".$datDB::table('sousdomaines')
                ->join('domaines','domaines.id','=','sousdomaines.domaines_id')
                 ->where('NomSousDomaines','=',$request->NomSousDomaines)
                 ->get();a->id.">".$data->NomSousDomaines."</option>";
    }
    //return $select;

    return Response::json($select);*/
});

Route::get('NewDocuments', ['as' => 'creerDocuments','uses' => 'DocumentsController@create']);

Route::post('NewDocuments', 'DocumentsController@store');

Route::get('ModifierDocuments', 'DocumentsController@edit');

Route::get('cities/{id}', 'DocumentsController@cities');

Route::post('UpdateDocument', 'DocumentsController@update');

Route::get('deleteDcoument', 'DocumentsController@destroy');
//Route::get('searchajax',array('as'=>'searchajax','uses'=>'DocumentsController@dataAjax'));

Route::any('searchTitre', function (){
    $term = \Illuminate\Support\Str::lower(\Illuminate\Support\Facades\Input::get('term'));

    $data = \Illuminate\Support\Facades\DB::select("SELECT * FROM documents WHERE TitreDocuments LIKE '%$term%'");

    foreach ($data as $v){
        $return_array[] = array('value' => $v->TitreDocuments);
    }

    return \Illuminate\Support\Facades\Response::json($return_array);
});

Route::any('searchPeriodicite', function (){
    $term = \Illuminate\Support\Str::lower(\Illuminate\Support\Facades\Input::get('term'));

    $data = \Illuminate\Support\Facades\DB::select("SELECT * FROM documents WHERE PeriodiciteDocuments LIKE '%$term%'");

    foreach ($data as $v){
        $return_array[] = array('value' => $v->PeriodiciteDocuments);
    }

    return \Illuminate\Support\Facades\Response::json($return_array);
});

//Route::get('select2-autocomplete-ajax', 'DocumentsController@dataAjax');



//// Fin Route in Documents /////////////////////////////////////////////

///
//// Route in Consultations /////////////////////////////////////////////


Route::get('/Consultations', 'ConsultationController@index');
Route::get('NouvelleConsultations', [
    'as' => 'addConsultations',
    'uses' => 'ConsultationController@create'
]);

Route::post('/NouvelleConsultations', 'ConsultationController@store');
Route::get('consulter','ConsultationController@consulter');


//// Fin Route in Consultations ///////////////////////////////////////////
///
///
/// ///
//// Route in Emprunts /////////////////////////////////////////////

Route::get('emprunt','EmpruntController@emprunt');
Route::get('retour','EmpruntController@retouremprunt');
Route::post('/Empruntretour','EmpruntController@update');
Route::get('/Emprunts', 'EmpruntController@index');
Route::get('NouvelleEmprunts', [
    'as' => 'addEmprunts',
    'uses' => 'EmpruntController@create'
]);

Route::post('/NouvelleEmprunts', 'EmpruntController@store');

Route::get('deleteEmprunts', 'EmpruntController@destroy');


//// Fin Route in Emprunts ///////////////////////////////////////////
///
///

////// Route in information////////////////////////////////////////////////
Route::get('/important',function (){
   return view('layouts.important');
});
Route::get('/information',function (){
   return view('layouts.informations');
});
Route::get('/planete',function (){
   return view('layouts.planete');
});



////// End Route in information////////////////////////////////////////////////

///


/// ROUTE STATISTIQUE ////////////////////////////////////////////////////////

Route::get('ouvragecategories','StatistiqueController@OuvrageCategories');
Route::get('ouvragesousdomaines','StatistiqueController@OuvrageSousdomaines');




/// END ROUTE



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/fiches','DocumentGenerator@ficheCatalographique');
Route::get('/choixfiches',function (){
    return view('fichesCatalographiques.choix');
 });

 