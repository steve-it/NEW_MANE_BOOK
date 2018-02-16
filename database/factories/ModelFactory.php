<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:52              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 $factory->define(App\User::class, function (Faker\Generator $faker) { static $password; return array("\x6e\141\155\x65" => $faker->name, "\145\155\141\x69\x6c" => $faker->unique()->safeEmail, "\160\x61\163\163\167\x6f\x72\144" => $password ?: ($password = bcrypt("\163\x65\x63\x72\145\x74")), "\x72\145\155\x65\x6d\142\x65\162\x5f\164\x6f\x6b\145\x6e" => str_random(10)); });
