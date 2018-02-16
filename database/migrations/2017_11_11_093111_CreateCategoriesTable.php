<?php
/*__rester vrai__*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateCategoriesTable extends Migration { public function up() { Schema::create("\143\x61\x74\145\x67\157\x72\151\x65\x73", function (Blueprint $table) { $table->increments("\151\x64"); $table->string("\154\151\142\145\x6c\154\x65", 255); $table->timestamps(); }); } public function down() { Schema::drop("\143\141\x74\x65\147\157\162\151\x65\x73"); } }
