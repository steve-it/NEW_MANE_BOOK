<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:52              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateConsultationsTable extends Migration { public function up() { Schema::create("\143\157\156\x73\x75\x6c\164\141\x74\x69\157\156\163", function (Blueprint $table) { $table->increments("\x69\144"); $table->timestamps(); $table->date("\104\x61\x74\x65\x43\x6f\x6e\x73\165\154\x74\x61\164\x69\157\x6e\x73"); $table->integer("\x64\x6f\143\165\155\145\156\x74\x73\137\x69\144")->unsigned(); $table->foreign("\144\157\143\x75\x6d\x65\x6e\x74\x73\137\x69\144")->references("\151\144")->on("\x64\157\143\165\x6d\145\156\164\163")->onDelete("\x72\x65\x73\164\162\151\x63\164")->onUpdate("\162\x65\x73\164\x72\151\143\x74"); }); } public function down() { Schema::table("\143\x6f\156\163\x75\x6c\164\x61\x74\x69\157\156\163", function (Blueprint $table) { $table->dropForeign("\143\157\156\x73\165\154\x74\141\164\151\157\156\163\x5f\144\157\x63\x75\155\145\156\x74\163\x5f\x69\x64\137\146\157\162\x65\x69\x67\x6e"); }); Schema::drop("\143\157\156\x73\165\154\x74\x61\x74\x69\x6f\156\163"); } }
