<?php
/*__rester vrai__*/
 namespace App; use Illuminate\Database\Eloquent\Model; class Consultation extends Model { protected $table = "\143\157\156\163\165\x6c\x74\x61\164\151\157\156\163"; public $timestamps = true; protected $fillable = array("\104\141\164\145\x43\x6f\x6e\x73\x75\154\164\141\x74\151\x6f\x6e\x73", "\144\x6f\x63\x75\155\x65\156\164\163\x5f\151\x64"); public function Documents() { return $this->belongsTo("\x41\x70\x70\134\104\157\x63\x75\x6d\145\156\x74\x73"); } }
