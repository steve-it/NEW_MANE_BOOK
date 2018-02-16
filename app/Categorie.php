<?php
/*__rester vrai__*/
 namespace App; use Illuminate\Database\Eloquent\Model; class Categorie extends Model { protected $table = "\x63\x61\x74\x65\147\x6f\x72\151\x65\163"; public $timestamps = true; protected $fillable = array("\x6c\x69\142\x65\154\x6c\x65"); public function Documents() { return $this->hasMany("\104\x6f\x63\x75\x6d\x65\156\x74\x73"); } }
