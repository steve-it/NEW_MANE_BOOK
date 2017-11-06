<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuteursTable extends Migration {

	public function up()
	{
		Schema::create('auteurs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('NomAuteur', 255);
			$table->enum('SexeAuteurs', array('Masculin', 'Feminin'));
		});
	}

	public function down()
	{
		Schema::drop('auteurs');
	}
}