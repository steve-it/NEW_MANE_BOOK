<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:52              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateDomainesTable extends Migration { public function up() { Schema::create("\144\x6f\x6d\141\151\156\145\x73", function (Blueprint $table) { $table->increments("\x69\x64"); $table->timestamps(); $table->string("\116\x6f\x6d\104\157\155\x61\151\x6e\145\x73", 255); }); } public function down() { Schema::drop("\144\x6f\155\141\x69\x6e\x65\163"); } }
