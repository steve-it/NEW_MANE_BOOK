<?php
/*__rester vrai__*/
 namespace App; use Illuminate\Database\Eloquent\Model; class SousDomaine extends Model { protected $table = "\x73\x6f\165\x73\144\x6f\x6d\141\x69\x6e\x65\x73"; public $timestamps = true; protected $fillable = array("\x4e\x6f\x6d\x53\157\165\163\x44\157\x6d\x61\x69\x6e\145\x73", "\x64\157\x6d\x61\151\x6e\145\x73\137\151\144"); public function Domaines() { return $this->belongsTo("\x41\160\x70\x5c\104\157\x6d\x61\151\156\145"); } public function Documents() { return $this->hasMany("\x41\x70\160\134\104\x6f\143\x75\x6d\x65\156\x74\163"); } }
