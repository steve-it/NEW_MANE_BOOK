<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:54              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App\Http\Controllers\Auth; use App\User; use App\Http\Controllers\Controller; use Illuminate\Support\Facades\Validator; use Illuminate\Foundation\Auth\RegistersUsers; class RegisterController extends Controller { use RegistersUsers; protected $redirectTo = "\x2f\x68\x6f\x6d\x65"; public function __construct() { $this->middleware("\147\x75\145\163\164"); } protected function validator(array $data) { return Validator::make($data, array("\x6e\141\155\145" => "\162\145\161\165\151\x72\145\144\174\163\x74\x72\151\x6e\147\174\155\x61\x78\72\62\x35\x35", "\x65\155\141\151\154" => "\162\x65\161\x75\151\162\x65\144\174\x73\164\x72\x69\x6e\x67\174\x65\155\x61\151\x6c\174\155\141\170\72\62\65\65\x7c\x75\x6e\151\161\x75\x65\x3a\x75\x73\145\162\163", "\160\x61\x73\x73\x77\157\x72\144" => "\162\x65\161\x75\151\162\145\144\174\163\164\162\151\x6e\x67\174\155\x69\156\72\66\174\x63\157\156\146\151\x72\x6d\x65\x64")); } protected function create(array $data) { return User::create(array("\x6e\x61\155\145" => $data["\156\141\x6d\145"], "\x65\155\141\151\154" => $data["\145\155\x61\x69\x6c"], "\x70\141\163\x73\x77\x6f\x72\x64" => bcrypt($data["\x70\x61\x73\163\167\157\x72\144"]))); } }
