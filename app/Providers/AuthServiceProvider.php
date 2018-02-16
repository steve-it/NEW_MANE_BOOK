<?php
/*__rester vrai__*/
 namespace App\Providers; use Illuminate\Support\Facades\Gate; use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider; class AuthServiceProvider extends ServiceProvider { protected $policies = array("\x41\x70\160\134\x4d\x6f\144\x65\x6c" => "\x41\x70\x70\x5c\x50\x6f\154\151\x63\x69\145\x73\134\115\x6f\x64\x65\154\120\x6f\154\x69\x63\x79"); public function boot() { $this->registerPolicies(); } }
