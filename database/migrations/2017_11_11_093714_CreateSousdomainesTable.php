<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:52              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateSousdomainesTable extends Migration { public function up() { Schema::create("\163\x6f\165\x73\x64\157\x6d\141\151\156\x65\x73", function (Blueprint $table) { $table->increments("\x69\x64"); $table->timestamps(); $table->string("\x4e\x6f\155\x53\x6f\x75\x73\x44\x6f\155\141\x69\x6e\145\x73", 255); $table->integer("\x64\157\155\141\151\x6e\x65\x73\137\x69\144")->unsigned(); $table->foreign("\x64\x6f\x6d\141\x69\x6e\x65\163\x5f\x69\x64")->references("\x69\x64")->on("\144\x6f\x6d\141\151\156\145\163")->onDelete("\162\145\163\164\162\x69\x63\164")->onUpdate("\162\145\163\x74\162\x69\143\164"); }); } public function down() { Schema::table("\x73\157\x75\x73\x64\157\155\141\x69\x6e\145\163", function (Blueprint $table) { $table->dropForeign("\163\157\165\163\x64\157\x6d\141\151\x6e\145\163\x5f\x64\x6f\x6d\x61\x69\156\x65\x73\137\151\x64\137\146\x6f\162\x65\x69\x67\156"); }); Schema::drop("\x73\157\x75\x73\144\157\x6d\141\151\x6e\145\x73"); } }
