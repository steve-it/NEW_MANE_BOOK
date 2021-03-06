<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Emprunt extends Model 
{

    use SoftDeletes;
    protected $table = 'emprunts';
    public $timestamps = true;

    protected $dates = ['deleted_at'];

    protected $fillable = ['NomEmprunteur','CniEmprunteur','DateEmprunt','DateEffRetourEmprunt','adresse',
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