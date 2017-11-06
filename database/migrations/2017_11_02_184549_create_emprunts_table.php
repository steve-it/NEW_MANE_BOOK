<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpruntsTable extends Migration {

	public function up()
	{
		Schema::create('emprunts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('NomEmprunteur', 255);
			$table->string('CniEmprunteur', 100);
			$table->date('DateEmprunt');
			$table->date('DateEffRetourEmprunt');
			$table->text('ObservationEmprunt');
			$table->text('ObservationRetour');
		});
	}

	public function down()
	{
		Schema::drop('emprunts');
	}
}