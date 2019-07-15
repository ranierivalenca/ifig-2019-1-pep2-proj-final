<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('disciplinas'))
        {
            Schema::create('disciplinas', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('nome');
                $table->string('carga_horaria');
                $table->string('periodo');
                $table->timestamps();

                $table->bigInteger('curso_id')->unsigned();
                $table->foreign('curso_id')->references('id')->on('curso')->onDelete('cascade');
            });
        }
        
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