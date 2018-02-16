<?php
/*__rester vrai__*/
 namespace App\Providers; use Illuminate\Support\ServiceProvider; use Illuminate\Support\Facades\Broadcast; class BroadcastServiceProvider extends ServiceProvider { public function boot() { Broadcast::routes(); require base_path("\162\157\x75\x74\x65\163\57\143\x68\x61\156\x6e\x65\154\x73\56\160\x68\x70"); } }
