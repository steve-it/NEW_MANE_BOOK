<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('documents', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('TitreDocuments', 255);
            $table->string('IsbnDocuments', 255)->nullable();
            $table->string('IssnDocuments', 255)->nullable();
            $table->string('CoteDocuments', 255)->nullable();
            $table->string('NumeroEntresDocuments', 255)->nullable();
            $table->integer('AnneePublicationDocuments')->nullable();
            $table->string('EditionsDocuments', 255)->nullable();
            $table->string('EditeurDocuments',255)->nullable();
            $table->integer('NbreExemplaireEdition')->nullable();
            $table->integer('DateEditionDocuments')->nullable();
            $table->string('LieuEditionDocuments')->nullable();
            $table->string('MaisonEditionDocuments', 255)->nullable();
            $table->string('LongueurEditionDocuments', 200)->nullable();
            $table->string('AdresseMaisonEdition', 255)->nullable();
            $table->string('IllustrationDocuments', 255)->nullable();
            $table->string('PeriodiciteDocuments', 255)->nullable();
            $table->string('ReliureDocuments', 255)->nullable();
            $table->string('origine', 255)->nullable();
            $table->integer('nbre_emprunt')->nullable();
            $table->string('Section',255)->nullable();
            $table->string('Auteur',255)->nullable();
            $table->string('NumeroDecret',255)->nullable();
            $table->integer('categories_id')->nullable()->unsigned();
            $table->integer('sousdomaines_id')->nullable()->unsigned();

            $table->foreign('categories_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('sousdomaines_id')
                ->references('id')
                ->on('sousdomaines')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::table('documents', function(Blueprint $table) {
            $table->dropForeign('documents_categories_id_foreign');
        });

        Schema::table('documents', function(Blueprint $table) {
            $table->dropForeign('documents_sousdomaines_id_foreign');
        });

        Schema::drop('documents');
    }
}
