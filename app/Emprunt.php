<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model 
{

    protected $table = 'emprunts';
    public $timestamps = true;
    protected $fillable = ['NomEmprunteur','CniEmprunteur','DateEmprunt','DateEffRetourEmprunt',
        'ObservationEmprunt','ObservationRetour','documents_id'];

    public function Documents()
    {
        return $this->belongsTo('App\Documents');
    }

}