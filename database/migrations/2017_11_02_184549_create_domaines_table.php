<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomainesTable extends Migration {

	public function up()
	{
		Schema::create('domaines', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('NomDomaines', 255);
		});
	}

	public function down()
	{
		Schema::drop('domaines');
	}
}