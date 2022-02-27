<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('clientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->string('TipoDocumento');
            $table->string('NDocumento');
            $table->string('FechaExpedicion');
            $table->string('LugarExpedicion');
            $table->string('FechaNacimiento');
            $table->string('LugarNacimiento');
            $table->string('TipoCliente');
            $table->string('PrimerNombre');
            $table->string('SegundoNombre');
            $table->string('PrimerApellido');
            $table->string('SegundoApellido');
            $table->string('Sexo');
            $table->string('EstadoCivil');
            $table->string('NivelEducativo');
            $table->string('DeclaracionRenta');
            $table->string('DireccionCobro');
            $table->string('BarrioCobro');
            $table->string('DirrecionResidencia');
            $table->string('BarrioResidencia');
            $table->string('TelefonoResidencia');
            $table->string('TelefonoAdicional');
            $table->string('Celular');
            $table->string('CelularAdicionar');
            $table->string('Email');
            $table->string('PersonaAcargo');
            $table->string('TipoVivienda');
            $table->string('Estrato');
            $table->string('NombreArredandor');
            $table->string('NumeroArredando');
            $table->string('Zona');
            $table->string('Banco');
            $table->string('NumeroCuenta');
            $table->string('observaciones');
            $table->bigInteger('Ruta')->unsigned();

            $table->timestamps();
            $table->foreign('Ruta')->references('id')->on('rutas')->onDelete('CASCADE');
        });
        //
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
