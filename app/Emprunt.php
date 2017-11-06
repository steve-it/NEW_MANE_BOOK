<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model 
{

    protected $table = 'emprunts';
    public $timestamps = true;

    public function Documents()
    {
        return $this->belongsToMany('Documents');
    }

}