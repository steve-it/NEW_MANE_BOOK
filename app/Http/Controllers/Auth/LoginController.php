<?php
/*__rester vrai__*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use Illuminate\Foundation\Auth\AuthenticatesUsers; class LoginController extends Controller { use AuthenticatesUsers; protected $redirectTo = "\x2f\150\x6f\155\145"; public function __construct() { $this->middleware("\147\x75\145\163\x74")->except("\154\157\147\157\165\164"); } }
