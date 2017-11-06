<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSousdomainesTable extends Migration {

	public function up()
	{
		Schema::create('sousdomaines', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('NomSousDomaines', 255);
		});
	}

	public function down()
	{
		Schema::drop('sousdomaines');
	}
}