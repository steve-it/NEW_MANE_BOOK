<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:53              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App; use Illuminate\Database\Eloquent\Model; class Categorie extends Model { protected $table = "\x63\141\164\145\147\x6f\x72\x69\x65\x73"; public $timestamps = true; protected $fillable = array("\154\x69\x62\x65\154\154\x65"); public function Documents() { return $this->hasMany("\x44\x6f\x63\x75\155\145\156\x74\163"); } }
