<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:54              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers; use Illuminate\Http\Request; use App\Domaine; use App\Documents; use App\Consultation; use App\Emprunt; use Illuminate\Support\Facades\DB; class ParametrageController extends Controller { public function acceuil() { goto bsPjG; bsPjG: $domaine = DB::table("\144\157\155\x61\151\x6e\x65\163")->count(); goto Ej0ms; YHc0L: return view("\x6c\141\x79\157\165\164\163\56\143\x61\162\157\165\163\145\154", compact(array("\144\x6f\x6d\x61\151\x6e\x65", "\143\x6f\x6e\x73\165\154\164\x61\x74\x69\157\x6e\163", "\x65\x6d\x70\x72\x75\x6e\x74\163", "\144\x6f\143\165\155\x65\x6e\x74\163"))); goto hZAGM; OXQUv: $emprunts = DB::table("\x65\x6d\160\x72\165\156\x74\163")->count(); goto Dj9S5; Ej0ms: $consultations = DB::table("\x63\x6f\x6e\163\165\154\x74\141\x74\x69\x6f\156\x73")->count(); goto OXQUv; Dj9S5: $documents = DB::table("\144\157\143\x75\x6d\x65\x6e\164\163")->count(); goto YHc0L; hZAGM: } }
