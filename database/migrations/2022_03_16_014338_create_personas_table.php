<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad');
            $table->float('peso', 8, 2);
            $table->float('estatura', 8, 2);
            $table->float('masa_muscular', 8, 2);
            $table->float('grasa_visceral', 8, 2);
            $table->float('grasa_corporal', 8, 2);
            $table->integer('edad_metabolica');
            $table->integer('diferencia_de_la_edad');
            $table->float('medida_de_brazo', 8, 2);
            $table->float('medida_de_pecho', 8, 2);
            $table->float('medida_de_pierna', 8, 2);
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
        Schema::dropIfExists('personas');
    }
}
