<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaDeCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up(){
         Schema::create('curso', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('nomeDoCurso');
                $table->string('quantidadeDePeriodos');
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
       Schema::dropIfExists('curso');
    }
}
