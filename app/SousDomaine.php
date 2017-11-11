<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousDomaine extends Model 
{

    protected $table = 'sousdomaines';
    public $timestamps = true;
    protected $fillable = ['NomSousDomaines'];



    public function Domaines()
    {
        return $this->belongsTo('Domaine');
    }

    public function Documents()
    {
        return $this->hasMany('Documents');
    }

}