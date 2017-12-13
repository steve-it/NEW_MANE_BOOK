<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Auteur;

class Documents extends Model 
{

    protected $table = 'documents';
    protected $fillable = ['TitreDocuments','IsbnDocuments','IssnDocuments','CoteDocuments','NumeroEntresDocuments',
        'AnneePublicationDocuments','EditionsDocuments','NbreExemplaireEdition','AnneeEditionDocuments','MaisonEditionDocuments',
        'LargeurEditionDocuments','LongueurEditionDocuments','AdresseMaisonEdition','IllustrationDocuments','PeriodiciteDocuments',
        'ReliureDocuments','nbre_emprunt','categories_id','sousdomaines_id'];

    public $timestamps = true;

    public function Categories()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function consultations()
    {
        return $this->hasMany('App\Consultation');
    }

    public function Auteurs()
    {
        return $this->belongsToMany('App\Auteur','auteurs_documents','documents_id','auteurs_id');
    }

    public function Emprunts()
    {
        return $this->hasMany('App\Emprunt');
    }

    public function SousDomaines()
    {
        return $this->belongsTo('App\SousDomaine','sousdomaines_id')->with('domaines');
    }

}