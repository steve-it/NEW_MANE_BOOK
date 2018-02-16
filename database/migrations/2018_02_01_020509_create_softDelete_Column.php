<?php
/*__rester vrai__*/
 use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateSoftDeleteColumn extends Migration { public function up() { Schema::table("\144\157\143\165\155\145\156\x74\163", function (Blueprint $table) { $table->softDeletes(); }); Schema::table("\145\x6d\160\162\165\x6e\164\163", function (Blueprint $table) { $table->softDeletes(); }); } }
