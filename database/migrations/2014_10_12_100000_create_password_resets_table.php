<?php
/*__rester vrai__*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreatePasswordResetsTable extends Migration { public function up() { Schema::create("\160\x61\163\x73\167\157\x72\144\137\x72\145\x73\x65\x74\163", function (Blueprint $table) { $table->string("\145\x6d\x61\151\154")->index(); $table->string("\164\157\153\145\156"); $table->timestamp("\x63\162\145\x61\164\x65\144\x5f\141\164")->nullable(); }); } public function down() { Schema::dropIfExists("\x70\141\x73\163\167\157\162\144\x5f\162\x65\163\145\164\x73"); } }
