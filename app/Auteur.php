<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model 
{

    protected $table = 'auteurs';
    protected $fillable = ['NomAuteur'];

    public $timestamps = true;

    public function Documents()
    {
        return $this->belongsToMany('Documents');
    }

}