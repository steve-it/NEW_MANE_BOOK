<?php
/*__rester vrai__*/
 namespace App; use Illuminate\Database\Eloquent\Model; class Consultation extends Model { protected $table = "\143\x6f\156\163\x75\154\x74\141\x74\151\157\156\163"; public $timestamps = true; protected $fillable = array("\104\141\x74\145\103\x6f\156\x73\165\x6c\164\x61\164\x69\157\156\x73", "\144\x6f\x63\165\x6d\x65\156\x74\163\x5f\x69\x64"); public function Documents() { return $this->belongsTo("\x41\160\x70\134\104\x6f\143\x75\155\145\x6e\x74\x73"); } }
