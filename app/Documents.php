<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documents extends Model
{
    use SoftDeletes;
    protected $table = 'documents';
    protected $fillable = ['TitreDocuments','IsbnDocuments','IssnDocuments','CoteDocuments','NumeroEntresDocuments',
        'AnneePublicationDocuments','EditionsDocuments','EditeurDocuments','NbreExemplaireEdition','DateEditionDocuments','LieuEditionDocuments',
        'MaisonEditionDocuments','LongueurEditionDocuments','AdresseMaisonEdition','IllustrationDocuments','PeriodiciteDocuments', 'origine',
        'ReliureDocuments','pagination','nbre_emprunt','Section','Auteur','NumeroDecret','categories_id','sousdomaines_id'];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public $timestamps = true;

    public function Categories()
    {
        return $this->belongsTo('App\Categorie');
    }

    public function consultations()
    {
        return $this->hasMany('App\Consultation');
    }

    /*public function Auteurs()
    {
        return $this->belongsToMany('App\Auteur','auteurs_documents','documents_id','auteurs_id');
    }*/

    public function Emprunts()
    {
        return $this->hasMany('App\Emprunt');
    }

    public function SousDomaines()
    {
        return $this->belongsTo('App\SousDomaine','sousdomaines_id')->with('domaines');
    }

}