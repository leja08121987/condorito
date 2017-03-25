<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariocarreraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariocarrera', function (Blueprint $table) {
            $table->increments('idUsuarioCarrera');
            $table->timestamps();


            $table->string('idUsers')->unsigned();
            $table->foreign('idUsers')->references('idUsers')->on('users');


            $table->string('idCarrera')->unsigned();
            $table->foreign('idCarrera')->references('idCarrera')->on('carrera');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuariocarrera');
    }


}
