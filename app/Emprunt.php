<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:53              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\SoftDeletes; class Emprunt extends Model { use SoftDeletes; protected $table = "\x65\x6d\x70\x72\165\156\x74\163"; public $timestamps = true; protected $dates = array("\x64\145\x6c\x65\164\145\x64\137\141\164"); protected $fillable = array("\116\x6f\x6d\x45\155\x70\162\x75\156\164\x65\165\162", "\x43\156\x69\105\x6d\x70\x72\165\156\x74\x65\165\x72", "\x44\x61\x74\x65\105\x6d\x70\x72\165\x6e\164", "\104\141\164\x65\x45\146\146\122\x65\164\157\x75\x72\x45\155\x70\x72\x75\x6e\164", "\x61\x64\162\145\163\x73\x65", "\117\x62\x73\x65\162\x76\141\x74\x69\x6f\x6e\105\155\160\x72\165\x6e\x74", "\x4f\x62\163\x65\x72\x76\x61\x74\x69\157\156\x52\x65\x74\157\x75\x72", "\x73\x74\x61\164\x75\163\105\155\x70\162\165\x6e\164\145\165\x72", "\143\141\x75\x74\151\157\x6e\x45\x6d\x70\x72\165\156\x74\145\165\x72", "\104\x61\164\x65\137\x52\x65\x74\157\x75\x72", "\144\157\143\x75\155\x65\156\x74\x73\137\151\x64"); public function Documents() { return $this->belongsTo("\x41\x70\x70\x5c\104\x6f\143\x75\x6d\145\156\x74\x73"); } }
