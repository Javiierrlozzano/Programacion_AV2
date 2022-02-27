<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ingresoscaja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresoscaja', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('Obsevacion');
            $table->bigInteger('TipoIngresos')->unsigned();
            $table->bigInteger('Billetera')->unsigned();
            $table->timestamps();
           
            $table->foreign('TipoIngresos')->references('id')->on('ingresos')->onDelete('cascade');
            $table->foreign('Billetera')->references('id')->on('billeteras')->onDelete('cascade');
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
    }
}
