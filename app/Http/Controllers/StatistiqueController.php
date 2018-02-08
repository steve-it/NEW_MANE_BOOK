<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categorie;
use App\Domaine;
use App\SousDomaine;
use App\Documents;

class StatistiqueController extends Controller
{
    //

    public function OuvrageCategories()
    {
        $DocumentParCategories = DB::table('documents')
            ->join('categories', 'documents.categories_id', '=', 'categories.id')
            ->select('categories.libelle', DB::raw('count(categories.id) as DocParCat'))
            ->groupBy('categories.libelle')
            ->get();

        return view('statistiques.documentscategories',compact('DocumentParCategories'));
    }

    public function OuvrageSousdomaines()
    {
        $DocumentParDomaines = DB::table('documents')
            ->join('sousdomaines', 'documents.sousdomaines_id', '=', 'sousdomaines.id')
            ->join('domaines','sousdomaines.domaines_id','=','domaines.id')
            ->select('domaines.NomDomaines','sousdomaines.NomSousDomaines',
                DB::raw('count(sousdomaines.id) as DocParCat'))
            ->groupBy('sousdomaines.NomSousDomaines')
            ->get();
        return view('statistiques.documentssousdomaines',compact('DocumentParDomaines'));

    }
}
