<?php
/*__rester vrai__*/
 namespace App; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\SoftDeletes; class Documents extends Model { use SoftDeletes; protected $table = "\144\x6f\x63\x75\155\145\156\164\163"; protected $fillable = array("\124\151\164\x72\145\x44\x6f\x63\x75\x6d\145\156\164\x73", "\x49\x73\x62\156\104\x6f\143\165\155\x65\156\164\163", "\x49\x73\x73\x6e\x44\157\143\165\x6d\145\156\164\163", "\103\x6f\164\145\x44\157\143\165\155\145\156\x74\163", "\116\165\x6d\x65\x72\157\105\156\x74\x72\x65\x73\x44\x6f\143\x75\155\x65\156\x74\163", "\x41\x6e\x6e\x65\145\120\165\142\154\151\143\141\164\x69\x6f\x6e\104\x6f\143\x75\x6d\145\156\164\x73", "\105\144\x69\x74\151\157\x6e\x73\x44\157\x63\x75\x6d\145\156\164\x73", "\105\144\x69\164\x65\165\x72\104\x6f\x63\165\155\145\156\164\163", "\116\x62\x72\x65\105\x78\x65\155\x70\154\x61\x69\x72\145\x45\144\151\164\x69\x6f\x6e", "\x44\141\x74\x65\x45\144\x69\164\x69\157\156\x44\157\x63\x75\155\x65\x6e\x74\163", "\114\151\x65\x75\105\144\151\164\151\x6f\156\104\157\143\165\x6d\145\156\164\163", "\115\141\x69\x73\x6f\x6e\x45\144\x69\x74\x69\x6f\156\104\157\143\165\155\x65\156\x74\x73", "\x4c\157\156\x67\165\145\165\162\x45\144\151\x74\151\x6f\x6e\104\x6f\x63\x75\x6d\145\156\x74\x73", "\101\x64\162\145\163\163\x65\115\141\151\x73\157\156\105\x64\151\164\151\x6f\156", "\x49\154\154\165\163\x74\162\x61\164\151\x6f\156\x44\157\x63\165\x6d\x65\x6e\x74\163", "\120\x65\162\151\157\144\x69\x63\x69\164\x65\x44\x6f\x63\x75\155\145\x6e\x74\163", "\157\x72\151\147\151\x6e\145", "\x52\145\154\x69\x75\x72\145\x44\157\x63\x75\x6d\x65\x6e\x74\x73", "\160\x61\147\x69\x6e\x61\x74\x69\157\156", "\156\x62\x72\145\137\x65\x6d\160\x72\165\x6e\x74", "\123\x65\x63\164\151\157\x6e", "\101\165\164\145\x75\x72", "\x4e\x75\x6d\145\x72\x6f\x44\145\143\162\x65\164", "\x63\x61\x74\145\x67\157\x72\151\x65\163\x5f\x69\x64", "\x73\x6f\165\x73\x64\x6f\155\x61\151\156\145\x73\137\151\144"); protected $dates = array("\x64\x65\x6c\x65\164\x65\x64\137\x61\164"); public $timestamps = true; public function Categories() { return $this->belongsTo("\101\x70\160\x5c\x43\x61\x74\x65\x67\157\162\151\x65"); } public function consultations() { return $this->hasMany("\101\160\160\x5c\x43\157\156\163\x75\154\x74\141\x74\x69\x6f\x6e"); } public function Emprunts() { return $this->hasMany("\x41\160\x70\x5c\105\155\160\x72\165\156\x74"); } public function SousDomaines() { return $this->belongsTo("\101\x70\160\x5c\123\x6f\x75\163\104\x6f\155\141\151\x6e\145", "\163\157\x75\x73\x64\157\x6d\x61\x69\156\x65\163\x5f\x69\x64")->with("\x64\157\155\x61\x69\x6e\x65\x73"); } }
