<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultationsDocumentsTable extends Migration {

	public function up()
	{
		Schema::create('consultations_documents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('consultations_id')->unsigned();
			$table->integer('documents_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('consultations_documents');
	}
}