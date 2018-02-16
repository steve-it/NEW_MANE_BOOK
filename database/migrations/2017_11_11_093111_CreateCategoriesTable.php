<?php
/*__rester vrai__*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateCategoriesTable extends Migration { public function up() { Schema::create("\x63\141\x74\145\x67\157\162\151\145\x73", function (Blueprint $table) { $table->increments("\151\x64"); $table->string("\154\151\x62\x65\154\154\145", 255); $table->timestamps(); }); } public function down() { Schema::drop("\x63\x61\x74\145\147\x6f\x72\x69\x65\x73"); } }
