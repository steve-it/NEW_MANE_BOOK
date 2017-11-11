<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('consultations_documents', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('consultations_id')->unsigned();
            $table->integer('documents_id')->unsigned();

            $table->foreign('consultations_id')
                ->references('id')
                ->on('consultations')
                ->onUpdate('restrict')
                ->onDelete('restrict');

            $table->foreign('documents_id')
                ->references('id')
                ->on('documents')
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
        Schema::table('consultations_documents', function(Blueprint $table) {
            $table->dropForeign('consultations_documents_documents_id_foreign');
        });

        Schema::table('consultations_documents', function(Blueprint $table) {
            $table->dropForeign('consultations_documents_consultations_id_foreign');
        });



        Schema::drop('consultations_documents');
    }
}
