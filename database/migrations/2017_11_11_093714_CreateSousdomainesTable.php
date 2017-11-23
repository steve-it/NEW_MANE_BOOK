<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSousdomainesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('sousdomaines', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('NomSousDomaines', 255);

            $table->integer('domaines_id')->unsigned();

            $table->foreign('domaines_id')
                ->references('id')
                ->on('domaines')
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
        Schema::table('sousdomaines', function(Blueprint $table) {
            $table->dropForeign('sousdomaines_domaines_id_foreign');
        });
        Schema::drop('sousdomaines');
    }
}
