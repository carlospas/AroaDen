<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('idpac');
            $table->string('apepac', 111);
            $table->string('nompac', 111);
            $table->string('direc', 111)->nullable();
            $table->string('pobla', 111)->nullable();            
            $table->string('dni', 18);
            $table->string('tel1', 18)->nullable();
            $table->string('tel2', 18)->nullable();
            $table->string('tel3', 18)->nullable();
            $table->string('sexo', 9)->nullable();
            $table->date('fenac')->default('1950-01-01')->nullable();
            $table->text('notas')->nullable();
            $table->timestamps();
            $table->index('apepac');
            $table->index('nompac');
            $table->unique('dni'); 	
       	});
    }

    public function down()
    {
        Schema::drop('pacientes');
    }
}
