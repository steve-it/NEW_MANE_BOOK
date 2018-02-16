<?php
/*__rester vrai__*/
 namespace App\Providers; use Illuminate\Support\ServiceProvider; use Illuminate\Support\Facades\Broadcast; class BroadcastServiceProvider extends ServiceProvider { public function boot() { Broadcast::routes(); require base_path("\162\x6f\165\x74\x65\x73\x2f\x63\x68\141\156\x6e\x65\154\x73\56\160\x68\x70"); } }
