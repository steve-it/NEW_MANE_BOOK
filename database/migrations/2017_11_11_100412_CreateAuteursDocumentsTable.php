<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuteursDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        //
        Schema::create('auteurs_documents', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('documents_id')->unsigned();
            $table->integer('auteurs_id')->unsigned();

            $table->foreign('documents_id')
                   ->references('id')
                   ->on('documents')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');
             $table->foreign('auteurs_id')
                   ->references('id')
                   ->on('auteurs')
                   ->onDelete('restrict')
                   ->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /*public function down()
    {
        //
        Schema::table('auteurs_documents', function(Blueprint $table) {
            $table->dropForeign('auteurs_documents_auteurs_id_foreign');
        });
        Schema::table('auteurs_documents', function(Blueprint $table) {
            $table->dropForeign('auteurs_documents_documents_id_foreign');
        });

        Schema::drop('auteurs_documents');
    }*/
}
