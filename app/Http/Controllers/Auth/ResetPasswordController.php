<?php
/*__rester vrai__*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use Illuminate\Foundation\Auth\ResetsPasswords; class ResetPasswordController extends Controller { use ResetsPasswords; protected $redirectTo = "\x2f\x68\x6f\x6d\145"; public function __construct() { $this->middleware("\147\165\x65\x73\164"); } }
