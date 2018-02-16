<?php
/*__rester vrai__*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateSoftDeleteColumn extends Migration { public function up() { Schema::table("\x64\157\x63\165\155\145\156\x74\163", function (Blueprint $table) { $table->softDeletes(); }); Schema::table("\x65\155\x70\162\x75\156\164\x73", function (Blueprint $table) { $table->softDeletes(); }); } }
