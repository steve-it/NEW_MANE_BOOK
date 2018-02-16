<?php
/*__rester vrai__*/
 namespace App; use Illuminate\Database\Eloquent\Model; class SousDomaine extends Model { protected $table = "\x73\x6f\x75\x73\144\157\155\141\151\x6e\145\163"; public $timestamps = true; protected $fillable = array("\116\157\155\x53\x6f\x75\x73\104\x6f\x6d\141\x69\x6e\145\x73", "\x64\157\x6d\x61\x69\156\x65\163\137\151\144"); public function Domaines() { return $this->belongsTo("\x41\x70\x70\134\104\157\x6d\x61\x69\156\145"); } public function Documents() { return $this->hasMany("\101\x70\x70\134\x44\x6f\x63\165\x6d\x65\x6e\164\x73"); } }
