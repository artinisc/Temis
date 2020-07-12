<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('codigo')->unique()->length(7);
            $table->string('idjuizo')->length(6);
            $table->string('cnj')->length(20);
            $table->string('comarca')->length(50)->nullable();
            $table->string('status')->length(10);
            $table->string('ncontrato')->length(20)->nullable();
            $table->string('contratante')->length(50);
            $table->string('carteira')->length(50);
            $table->string('tipo')->length(100);
            $table->string('bem')->length(100)->nullable();
            $table->float('valor')->length(20);
            $table->string('andamento')->length(50);
            $table->text('descricao')->length(10000);
            $table->string('nomeautor')->length(50)->nullable();
            $table->string('docautor')->length(11)->nullable();
            $table->string('nomereu')->length(50);
            $table->string('docreu')->length(11);
            $table->string('endreu')->length(100)->nullable();
            $table->string('cidadereu')->length(100)->nullable();
            $table->string('cepreu')->length(8)->nullable();
            $table->string('telefonereu')->length(11)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processos');
    }
}
