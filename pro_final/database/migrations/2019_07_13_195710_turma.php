<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Turma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semestres');
            $table->string('turno');
            $table->timestamps();
            
            $table->Integer('professor_id')->unsigned();
            $table->foreign('professor_id')->references('id')->on('professor')->onDelete('cascade');
            
            $table->bigInteger('disciplinas_id')->unsigned();
            $table->foreign('disciplinas_id')->references('id')->on('disciplinas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
