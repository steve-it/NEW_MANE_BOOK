<?php
/*__rester vrai__*/
 namespace App; use Illuminate\Database\Eloquent\Model; class Categorie extends Model { protected $table = "\143\x61\x74\x65\x67\157\x72\x69\x65\x73"; public $timestamps = true; protected $fillable = array("\x6c\151\x62\x65\x6c\x6c\x65"); public function Documents() { return $this->hasMany("\x44\x6f\x63\165\155\145\x6e\164\x73"); } }
