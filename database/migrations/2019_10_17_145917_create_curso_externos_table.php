<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoExternosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_externos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreCurso');
            $table->date('fechaInicio');
            $table->date('fechaTermino');
            $table->string('horario');
            $table->integer('duracion');
            $table->float('costo');
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
        Schema::dropIfExists('curso_externos');
    }
}
