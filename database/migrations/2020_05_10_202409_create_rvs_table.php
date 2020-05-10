<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRvsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rvs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('email');
            $table->string('tel');
            $table->string('besoin');
            $table->string('description');
            $table->string('statut');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rvs');
    }
}
