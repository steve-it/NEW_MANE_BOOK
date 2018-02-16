<?php
/*__rester vrai__*/
 $factory->define(App\User::class, function (Faker\Generator $faker) { static $password; return array("\156\x61\x6d\145" => $faker->name, "\145\x6d\141\x69\x6c" => $faker->unique()->safeEmail, "\x70\x61\x73\x73\x77\157\162\144" => $password ?: ($password = bcrypt("\163\145\143\162\x65\x74")), "\162\x65\x6d\x65\x6d\142\x65\x72\x5f\x74\157\153\x65\156" => str_random(10)); });
