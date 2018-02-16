<?php
/*__rester vrai__*/
 namespace App; use Illuminate\Notifications\Notifiable; use Illuminate\Foundation\Auth\User as Authenticatable; class User extends Authenticatable { use Notifiable; protected $fillable = array("\156\x61\x6d\x65", "\145\x6d\141\x69\x6c", "\160\141\x73\x73\x77\157\162\144"); protected $hidden = array("\x70\x61\x73\x73\167\x6f\162\x64", "\162\145\155\x65\x6d\x62\x65\x72\137\x74\157\153\145\156"); }
