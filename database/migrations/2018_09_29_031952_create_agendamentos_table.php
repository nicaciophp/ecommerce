<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('users');
            $table->integer('medico_id')->unsigned();
            $table->foreign('medico_id')->references('id')->on('users');

            $table->dateTime('data_pre_agendamento')->nullable();
            $table->dateTime('data_consulta')->nullable();

            $table->text('sintomas')->nullable();
            $table->text('receita')->nullable();
            $table->text('avaliacao_medica')->nullable();
            $table->text('observacoes')->nullable();

            $table->boolean('confirmada')->nullable();
            $table->boolean('concluida')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos');
    }
}
