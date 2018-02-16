<?php
/*__rester vrai__*/
 namespace App\Providers; use Illuminate\Support\Facades\Gate; use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider; class AuthServiceProvider extends ServiceProvider { protected $policies = array("\101\x70\160\134\115\x6f\144\x65\154" => "\101\160\x70\x5c\120\157\x6c\151\x63\x69\145\163\x5c\115\x6f\144\145\x6c\x50\x6f\154\151\x63\171"); public function boot() { $this->registerPolicies(); } }
