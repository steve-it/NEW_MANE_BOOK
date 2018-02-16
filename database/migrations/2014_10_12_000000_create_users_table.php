<?php
/*__rester vrai__*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateUsersTable extends Migration { public function up() { Schema::create("\x75\x73\x65\x72\x73", function (Blueprint $table) { $table->increments("\151\144"); $table->string("\156\141\155\x65"); $table->string("\145\x6d\x61\151\154")->unique(); $table->string("\160\141\163\163\x77\x6f\162\144"); $table->rememberToken(); $table->timestamps(); }); } public function down() { Schema::dropIfExists("\x75\x73\x65\x72\x73"); } }
