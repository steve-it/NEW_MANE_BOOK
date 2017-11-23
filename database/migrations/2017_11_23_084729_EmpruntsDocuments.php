<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmpruntsDocuments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('documents_emprunts', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('documents_id')->unsigned();
            $table->integer('emprunts_id')->unsigned();

            $table->foreign('documents_id')
                ->references('id')
                ->on('documents')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('emprunts_id')
                ->references('id')
                ->on('emprunts')
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
        Schema::table('documents_emprunts', function(Blueprint $table) {
            $table->dropForeign('documents_emprunts_emprunts_id_foreign');
        });
        Schema::table('documents_emprunts', function(Blueprint $table) {
            $table->dropForeign('documents_emprunts_documents_id_foreign');
        });

        Schema::drop('documents_emprunts');
    }
}
