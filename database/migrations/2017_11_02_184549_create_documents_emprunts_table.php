<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentsEmpruntsTable extends Migration {

	public function up()
	{
		Schema::create('documents_emprunts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('documents_id')->unsigned();
			$table->integer('emprunts_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('documents_emprunts');
	}
}