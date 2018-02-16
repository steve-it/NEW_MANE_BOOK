<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:53              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App; use Illuminate\Database\Eloquent\Model; class Consultation extends Model { protected $table = "\143\157\x6e\x73\x75\154\x74\141\164\151\157\156\163"; public $timestamps = true; protected $fillable = array("\104\x61\164\145\103\157\156\163\x75\x6c\164\141\x74\x69\x6f\156\163", "\144\157\143\165\155\145\x6e\164\163\137\151\144"); public function Documents() { return $this->belongsTo("\x41\x70\160\134\104\157\143\x75\x6d\x65\x6e\164\x73"); } }
