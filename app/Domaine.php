<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:54              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App; use Illuminate\Database\Eloquent\Model; use App\SousDomaine; class Domaine extends Model { protected $table = "\x64\x6f\x6d\x61\151\x6e\x65\163"; public $timestamps = true; protected $fillable = array("\x4e\x6f\155\x44\157\x6d\x61\151\156\x65\163"); public function SousDomaines() { return $this->hasMany("\x53\157\x75\163\104\x6f\x6d\141\x69\156\x65"); } public function getsessionAnnee($Id_Annee) { goto Z6xlU; X4KZa: $select .= "\74\157\x70\x74\151\157\x6e\76\x2d\x2d\55\x2d\x2d\x2d\55\55\55\55\x2d\55\x2d\x2d\55\55\55\55\x2d\55\x2d\55\55\x2d\x2d\x2d\x2d\x2d\55\55\55\x2d\55\x2d\x2d\x3c\x2f\x6f\x70\164\x69\157\x6e\76"; goto iXp0H; Z6xlU: $domainesous = SousDomaine::where("\144\x6f\155\x61\x69\x6e\x65\163\137\x69\x64", "\75", $Id_Annee)->get(); goto bx1Sk; EE0zK: return $select; goto CY9hU; bx1Sk: $select = null; goto X4KZa; QnY4x: S4QsB: goto EE0zK; iXp0H: foreach ($domainesous as $data) { $select .= "\x3c\157\x70\164\151\157\x6e\40\166\x61\154\x75\145\75" . $data->id . "\76" . $data->NomSousDomaines . "\74\x2f\x6f\160\x74\x69\157\156\x3e"; v5iYb: } goto QnY4x; CY9hU: } }
