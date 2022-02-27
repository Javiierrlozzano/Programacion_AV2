<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Creditos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('TipoCredito');
            $table->time('FechaInicio');
            $table->time('FechaCancelacion');
            $table->string('NumeroCuotas');
            $table->string('NumeroCuotasCancelada');
            $table->string('UltimaCuota');
            $table->string('ValorTotalCredito');
            $table->string('EstadoCredito');
            $table->string('Porcentaje');
            $table->bigInteger('BilleteraSalida')->unsigned();
            $table->bigInteger('BilleteraEntrada')->unsigned();
            $table->timestamps();
            
            $table->foreign('BilleteraSalida')->references('id')->on('billeteras')->onDelete('cascade');
            $table->foreign('BilleteraEntrada')->references('id')->on('billeteras')->onDelete('cascade');
            
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
