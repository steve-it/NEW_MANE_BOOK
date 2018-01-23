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
            $table->string('IsbnDocuments', 255);
            $table->string('IssnDocuments', 255);
            $table->string('CoteDocuments', 255);
            $table->string('NumeroEntresDocuments', 255);
            $table->date('AnneePublicationDocuments');
            $table->string('EditionsDocuments', 255);
            $table->string('EditeurDocuments',255);
            $table->integer('NbreExemplaireEdition');
            $table->date('DateEditionDocuments');
            $table->string('LieuEditionDocuments');
            $table->string('MaisonEditionDocuments', 255);
            $table->string('LongueurEditionDocuments', 200);
            $table->string('AdresseMaisonEdition', 255);
            $table->string('IllustrationDocuments', 255);
            $table->string('PeriodiciteDocuments', 255);
            $table->string('ReliureDocuments', 255);
            $table->integer('nbre_emprunt')->nullable();
            $table->string('Section',255);
            $table->string('Auteur',255);
            $table->string('NumeroDecret',255);
            $table->string('NumeroEntreesPeriodiRevu',255);
           ;

            $table->integer('categories_id')->unsigned();
            $table->integer('sousdomaines_id')->unsigned();

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
