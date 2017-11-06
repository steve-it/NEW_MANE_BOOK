<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentsTable extends Migration {

	public function up()
	{
		Schema::create('documents', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('TitreDocuments', 255);
			$table->string('IsbnDocuments', 255);
			$table->string('IssnDocuments', 255);
			$table->string('CoteDocuments', 255);
			$table->string('NumeroEntresDocuments', 255);
			$table->date('AnneePublicationDocuments');
			$table->string('EditionsDocuments', 255);
			$table->integer('NbreExemplaireEdition');
			$table->date('AnneeEditionDocuments');
			$table->string('MaisonEditionDocuments', 255);
			$table->integer('LargeurEditionDocuments');
			$table->string('LongueurEditionDocuments', 200);
			$table->string('AdresseMaisonEdition', 255);
			$table->string('IllustrationDocuments', 255);
			$table->string('PeriodiciteDocuments', 255);
			$table->string('ReliureDocuments', 255);
		});
	}

	public function down()
	{
		Schema::drop('documents');
	}
}