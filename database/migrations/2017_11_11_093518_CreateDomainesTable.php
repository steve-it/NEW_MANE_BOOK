<?php
/*__rester vrai__*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateDomainesTable extends Migration { public function up() { Schema::create("\144\x6f\155\141\x69\156\145\163", function (Blueprint $table) { $table->increments("\151\144"); $table->timestamps(); $table->string("\x4e\x6f\155\x44\157\x6d\x61\151\x6e\145\x73", 255); }); } public function down() { Schema::drop("\x64\157\x6d\x61\151\156\145\x73"); } }
