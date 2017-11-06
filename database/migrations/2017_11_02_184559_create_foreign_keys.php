<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('documents_emprunts', function(Blueprint $table) {
			$table->foreign('documents_id')->references('id')->on('documents')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('documents_emprunts', function(Blueprint $table) {
			$table->foreign('emprunts_id')->references('id')->on('emprunts')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('consultations_documents', function(Blueprint $table) {
			$table->foreign('consultations_id')->references('id')->on('consultations')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('consultations_documents', function(Blueprint $table) {
			$table->foreign('documents_id')->references('id')->on('documents')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('auteurs_documents', function(Blueprint $table) {
			$table->foreign('documents_id')->references('id')->on('documents')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('auteurs_documents', function(Blueprint $table) {
			$table->foreign('auteur_id')->references('id')->on('auteurs')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('documents_emprunts', function(Blueprint $table) {
			$table->dropForeign('documents_emprunts_documents_id_foreign');
		});
		Schema::table('documents_emprunts', function(Blueprint $table) {
			$table->dropForeign('documents_emprunts_emprunts_id_foreign');
		});
		Schema::table('consultations_documents', function(Blueprint $table) {
			$table->dropForeign('consultations_documents_consultations_id_foreign');
		});
		Schema::table('consultations_documents', function(Blueprint $table) {
			$table->dropForeign('consultations_documents_documents_id_foreign');
		});
		Schema::table('auteurs_documents', function(Blueprint $table) {
			$table->dropForeign('auteurs_documents_documents_id_foreign');
		});
		Schema::table('auteurs_documents', function(Blueprint $table) {
			$table->dropForeign('auteurs_documents_auteur_id_foreign');
		});
	}
}