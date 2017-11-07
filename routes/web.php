<?php

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
Route::get('/', function () {
    return view('page_model');
});



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

    /*Route::put('/Nouveausousdomaines', 'SousDomaineController@UpdateDomaines');

    Route::get('/listsousdomaines', 'SousDomaineController@show');

    Route::post('/deletesousdomaines', 'SousDomaineController@delete');*/


//// Fin Route in SousDomaines ///////////////////////////////////////////////// Fin Route in Domaines /////////////////////////////////////////////
///
///
///
//// Route in Categories /////////////////////////////////////////////


    Route::get('/categories', 'CategorieController@index');

    Route::post('/Nouveaucategories', 'CategorieController@NewCategories');

    /*Route::put('/Nouveaucategories', 'CategorieController@UpdateCategories');

    Route::get('/listcategories', 'CategorieController@show');

    Route::post('/deletecategories', 'CategorieController@delete');*/


//// Fin Route in SousDomaines /////////////////////////////////////////////




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
