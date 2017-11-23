<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpruntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('emprunts', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('NomEmprunteur', 255);
            $table->string('CniEmprunteur', 100);
            $table->date('DateEmprunt');
            $table->date('DateEffRetourEmprunt');
            $table->text('ObservationEmprunt');
            $table->text('ObservationRetour');
            $table->string('statusEmprunteur',50);
            $table->integer('cautionEmprunteur');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop('emprunts');
    }
}
