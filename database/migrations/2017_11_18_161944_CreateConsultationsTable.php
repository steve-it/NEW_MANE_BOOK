<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('consultations', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('DateConsultations');
            $table->integer('documents_id')->unsigned();
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
        Schema::table('consultations', function(Blueprint $table) {
            $table->dropForeign('consultations_documents_id_foreign');
        });
        Schema::drop('consultations');
    }
}
