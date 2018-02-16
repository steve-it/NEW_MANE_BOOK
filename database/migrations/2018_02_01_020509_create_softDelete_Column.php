<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  1.8.8   |
    |              on 2018-02-16 09:48:52              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateSoftDeleteColumn extends Migration { public function up() { Schema::table("\144\157\143\x75\155\145\x6e\164\x73", function (Blueprint $table) { $table->softDeletes(); }); Schema::table("\145\x6d\x70\162\165\156\x74\x73", function (Blueprint $table) { $table->softDeletes(); }); } }
