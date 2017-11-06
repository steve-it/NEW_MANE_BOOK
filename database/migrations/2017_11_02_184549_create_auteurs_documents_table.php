<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuteursDocumentsTable extends Migration {

	public function up()
	{
		Schema::create('auteurs_documents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('documents_id')->unsigned();
			$table->integer('auteur_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('auteurs_documents');
	}
}