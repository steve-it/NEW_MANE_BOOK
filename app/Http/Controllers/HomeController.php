<?php
/*__rester vrai__*/
 namespace App\Http\Controllers; use Illuminate\Http\Request; class HomeController extends Controller { public function __construct() { $this->middleware("\141\165\x74\150"); } public function index() { return view("\150\x6f\155\x65"); } }
