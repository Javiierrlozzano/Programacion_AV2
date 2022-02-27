<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('Cliente')->unsigned();
            $table->bigInteger('Credito')->unsigned();
            $table->bigInteger('BilleteraPago')->unsigned();
            $table->time('FechaPago');
            $table->string('Valor');
            $table->timestamps();

           
            $table->foreign('BilleteraPago')->references('id')->on('billeteras')->onDelete('cascade');
            $table->foreign('Cliente')->references('id')->on('clientes')->onDelete('cascade');


            $table->foreign('Credito')->references('id')->on('creditos')->onDelete('cascade');
            
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
