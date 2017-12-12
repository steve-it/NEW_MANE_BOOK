<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousDomaine extends Model 
{

    protected $table = 'sousdomaines';
    public $timestamps = true;
    protected $fillable = ['NomSousDomaines','domaines_id'];




    public function Domaines()
    {
        return $this->belongsTo('App\Domaine');
    }

    public function Documents()
    {
        return $this->hasMany('App\Documents');
    }



}