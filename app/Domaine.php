<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model 
{

    protected $table = 'domaines';
    public $timestamps = true;
    protected $fillable = ['NomDomaines'];

    public function SousDomaines()
    {
        return $this->hasMany('SousDomaine');
    }

}