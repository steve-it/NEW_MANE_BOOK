<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model 
{

    protected $table = 'emprunts';
    public $timestamps = true;
    protected $fillable = ['NomEmprunteur','CniEmprunteur','DateEmprunt','DateEffRetourEmprunt',
        'ObservationEmprunt','ObservationRetour','statusEmprunteur','cautionEmprunteur'];

    public function Documents()
    {
        return $this->belongsToMany('App\Documents','documents_emprunts','emprunts_id','documents_id');
    }

}