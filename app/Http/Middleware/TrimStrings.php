<?php
/*__rester vrai__*/
 namespace App\Http\Middleware; use Illuminate\Foundation\Http\Middleware\TrimStrings as BaseTrimmer; class TrimStrings extends BaseTrimmer { protected $except = array("\x70\141\163\163\x77\x6f\x72\144", "\x70\141\163\163\167\157\x72\x64\137\143\x6f\156\x66\x69\162\155\141\164\151\x6f\x6e"); }
