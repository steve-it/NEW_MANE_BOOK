<?php
/*__rester vrai__*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateUsersTable extends Migration { public function up() { Schema::create("\x75\x73\145\162\x73", function (Blueprint $table) { $table->increments("\151\144"); $table->string("\156\x61\155\x65"); $table->string("\x65\155\141\151\154")->unique(); $table->string("\160\x61\x73\x73\167\157\x72\144"); $table->rememberToken(); $table->timestamps(); }); } public function down() { Schema::dropIfExists("\x75\x73\x65\162\163"); } }
