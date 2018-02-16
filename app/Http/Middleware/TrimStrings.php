<?php
/*__rester vrai__*/
 namespace App\Http\Middleware; use Illuminate\Foundation\Http\Middleware\TrimStrings as BaseTrimmer; class TrimStrings extends BaseTrimmer { protected $except = array("\x70\x61\x73\x73\x77\157\x72\144", "\160\141\163\163\x77\157\162\x64\x5f\143\x6f\x6e\146\x69\x72\155\x61\164\x69\x6f\156"); }
