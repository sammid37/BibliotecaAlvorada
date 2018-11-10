<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExposicoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exposicoes', function (Blueprint $table) {
            $table->increments('CodExp');
            /* Tirar dúvidas acerca dessas chaves estrangeiras
            e se será necessário criar outra tabela relacionado a 
            exposição
            */
            // $table->unsignedInteger('CodProf');
            // $table->unsignedInteger('CodFunc');
            $table->string('Titulo');
            $table->text('Descricao');
            $table->text('Mensagem'); //campo opcional
            // Duração de no máximo 1 mês
            $table->date('DataInicio');
            $table->date('DataFinal');
            // PDFs com os arquivos de exposição, "é binary que usa?"
            $table->binary('Arquivos');
            $table->timestamps();
        });
    }
// (CódExp, CódProf, CódFunc, Título, Descrição, Mensagem(opcional), Período, Arquivos(em PDF, estabelecer um limite), Status(Aprovado ou Rejeitado));
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exposicoes');
    }
}
