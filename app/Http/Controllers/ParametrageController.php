<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domaine;
use App\Documents;
use App\Consultation;
use App\Emprunt;
use Illuminate\Support\Facades\DB;

class ParametrageController extends Controller
{

    public function acceuil()
    {


        $domaine = DB::table('domaines')
                   ->count();
        $consultations = DB::table('consultations')
                         ->count();
        $emprunts = DB::table('emprunts')
                      ->count();
        $documents = DB::table('documents')
                     ->count();

        return view('layouts.carousel',compact(['domaine','consultations','emprunts','documents']));
    }
}
