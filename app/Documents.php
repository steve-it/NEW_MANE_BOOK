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
        'ReliureDocuments','categories_id','sousdomaines_id'];

    public $timestamps = true;

    public function categories()
    {
        return $this->belongsTo('Categorie');
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
        return $this->belongsTo('SousDomaine');
    }

}