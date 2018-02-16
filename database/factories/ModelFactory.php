<?php
/*__rester vrai__*/
 $factory->define(App\User::class, function (Faker\Generator $faker) { static $password; return array("\156\141\155\x65" => $faker->name, "\x65\155\141\x69\x6c" => $faker->unique()->safeEmail, "\x70\141\x73\x73\167\x6f\162\144" => $password ?: ($password = bcrypt("\x73\x65\143\x72\145\164")), "\162\x65\x6d\x65\155\x62\x65\162\x5f\x74\157\153\x65\x6e" => str_random(10)); });
