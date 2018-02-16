<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:52              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateCategoriesTable extends Migration { public function up() { Schema::create("\143\141\x74\x65\147\157\162\x69\145\163", function (Blueprint $table) { $table->increments("\151\144"); $table->string("\154\151\x62\145\x6c\154\145", 255); $table->timestamps(); }); } public function down() { Schema::drop("\143\141\x74\145\x67\157\x72\151\x65\x73"); } }
