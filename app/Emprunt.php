<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model 
{

    protected $table = 'emprunts';
    public $timestamps = true;
    protected $fillable = ['NomEmprunteur','CniEmprunteur','adresse','DateEmprunt','DateEffRetourEmprunt',
        'ObservationEmprunt','ObservationRetour','statusEmprunteur','cautionEmprunteur','Date_Retour','documents_id'];

    /*public function Documents()
    {
        return $this->belongsToMany('App\Documents','documents_emprunts','emprunts_id','documents_id');
    }*/
    public function Documents()
    {
        return $this->belongsTo('App\Documents');
    }

}