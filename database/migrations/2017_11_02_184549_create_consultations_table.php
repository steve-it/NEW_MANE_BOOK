<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConsultationsTable extends Migration {

	public function up()
	{
		Schema::create('consultations', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->date('DateConsultations');
		});
	}

	public function down()
	{
		Schema::drop('consultations');
	}
}