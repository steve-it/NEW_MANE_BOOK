<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model 
{

    protected $table = 'categories';
    public $timestamps = true;

    public function Documents()
    {
        return $this->hasMany('Documents');
    }

}