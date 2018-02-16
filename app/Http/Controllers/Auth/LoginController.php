<?php
/*__rester vrai__*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use Illuminate\Foundation\Auth\AuthenticatesUsers; class LoginController extends Controller { use AuthenticatesUsers; protected $redirectTo = "\x2f\x68\157\155\145"; public function __construct() { $this->middleware("\147\x75\145\x73\x74")->except("\x6c\157\x67\157\x75\164"); } }
