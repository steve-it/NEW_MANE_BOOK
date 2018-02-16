<?php
/*__rester vrai__*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateDomainesTable extends Migration { public function up() { Schema::create("\144\157\x6d\x61\x69\x6e\145\x73", function (Blueprint $table) { $table->increments("\151\x64"); $table->timestamps(); $table->string("\x4e\x6f\155\x44\x6f\x6d\141\x69\x6e\145\163", 255); }); } public function down() { Schema::drop("\x64\x6f\155\141\151\x6e\145\163"); } }
