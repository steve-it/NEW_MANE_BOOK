<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:52              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateUsersTable extends Migration { public function up() { Schema::create("\x75\163\x65\162\x73", function (Blueprint $table) { $table->increments("\151\x64"); $table->string("\156\141\x6d\x65"); $table->string("\145\x6d\141\151\x6c")->unique(); $table->string("\x70\x61\x73\x73\167\157\x72\144"); $table->rememberToken(); $table->timestamps(); }); } public function down() { Schema::dropIfExists("\x75\x73\x65\x72\x73"); } }
