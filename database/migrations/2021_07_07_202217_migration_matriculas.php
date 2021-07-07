<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrationMatriculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('matriculas', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('disciplinas_id');
        $table->foreign('disciplinas_id')->references('id')->on('disciplinas');
        $table->unsignedInteger('alunos_id');
        $table->foreign('alunos_id')->references('id')->on('alunos');
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
      Schema::dropIfExists('matriculas');
    }
}
