<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model 
{

    protected $table = 'documents';
    public $timestamps = true;

    public function categories()
    {
        return $this->belongsTo('Categorie');
    }

    public function consultations()
    {
        return $this->belongsToMany('Consultation');
    }

    public function Auteurs()
    {
        return $this->belongsToMany('Auteur');
    }

    public function Emprunts()
    {
        return $this->belongsToMany('Emprunt');
    }

    public function SousDomaines()
    {
        return $this->belongsTo('SousDomaine');
    }

}