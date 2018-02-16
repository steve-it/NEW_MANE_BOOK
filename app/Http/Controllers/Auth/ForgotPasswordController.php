<?php
/*__rester vrai__*/
 namespace App\Http\Controllers\Auth; use App\Http\Controllers\Controller; use Illuminate\Foundation\Auth\SendsPasswordResetEmails; class ForgotPasswordController extends Controller { use SendsPasswordResetEmails; public function __construct() { $this->middleware("\147\x75\145\163\x74"); } }
