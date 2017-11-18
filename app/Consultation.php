<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model 
{

    protected $table = 'consultations';
    public $timestamps = true;
    protected $fillable = ['DateConsultations','documents_id'];

    public function Documents()
    {
        return $this->belongsTo('App\Documents');
    }

}