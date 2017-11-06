<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model 
{

    protected $table = 'consultations';
    public $timestamps = true;

    public function Documents()
    {
        return $this->belongsToMany('Documents');
    }

}