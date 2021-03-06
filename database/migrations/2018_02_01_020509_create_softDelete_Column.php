<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftDeleteColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('documents', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('emprunts', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

   }
