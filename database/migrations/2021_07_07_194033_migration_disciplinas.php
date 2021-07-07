<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrationDisciplinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('disciplinas', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nome');
        $table->integer('carga-horaria');
        $table->unsignedInteger('cursos_id');
        $table->foreign('cursos_id')->references('id')->on('cursos');
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
      Schema::dropIfExists('disciplinas');
    }
}
