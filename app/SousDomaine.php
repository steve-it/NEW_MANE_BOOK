<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:53              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App; use Illuminate\Database\Eloquent\Model; class SousDomaine extends Model { protected $table = "\x73\x6f\165\x73\x64\x6f\x6d\141\151\x6e\145\x73"; public $timestamps = true; protected $fillable = array("\x4e\157\155\123\x6f\165\x73\x44\157\155\x61\151\x6e\145\163", "\144\x6f\155\141\151\156\x65\163\x5f\x69\x64"); public function Domaines() { return $this->belongsTo("\101\x70\160\134\x44\157\155\x61\151\x6e\x65"); } public function Documents() { return $this->hasMany("\101\x70\x70\134\104\x6f\x63\165\155\145\x6e\164\x73"); } }
