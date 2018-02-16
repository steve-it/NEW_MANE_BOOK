<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:52              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreatePasswordResetsTable extends Migration { public function up() { Schema::create("\x70\x61\163\163\167\x6f\x72\x64\137\162\x65\x73\x65\x74\x73", function (Blueprint $table) { $table->string("\145\155\141\x69\x6c")->index(); $table->string("\164\x6f\153\x65\156"); $table->timestamp("\143\162\x65\141\164\x65\144\137\x61\x74")->nullable(); }); } public function down() { Schema::dropIfExists("\160\x61\x73\163\167\157\162\x64\137\162\x65\163\x65\x74\x73"); } }
