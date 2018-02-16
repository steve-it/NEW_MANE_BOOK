<?php
/*__rester vrai__*/
 namespace App; use Illuminate\Notifications\Notifiable; use Illuminate\Foundation\Auth\User as Authenticatable; class User extends Authenticatable { use Notifiable; protected $fillable = array("\x6e\141\155\x65", "\x65\x6d\141\151\x6c", "\x70\x61\x73\x73\167\x6f\x72\x64"); protected $hidden = array("\x70\x61\x73\163\167\157\x72\x64", "\162\145\x6d\x65\155\142\x65\162\137\x74\x6f\x6b\x65\x6e"); }
