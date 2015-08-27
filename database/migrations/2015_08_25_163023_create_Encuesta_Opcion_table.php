<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestaOpcionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Encuesta_Opcion', function(Blueprint $table)
		{
			$table->increments('id');
			

			//asignamos el atributo de la llave foranea
			$table->integer('Fk_IdOpcion')->unsigned();
			$table->integer('Fk_seguimiento')->unsigned();
			$table->integer('Fk_IdAprendiz')->unsigned();

			//creamos la relacion
			$table->foreign('Fk_IdAprendiz')->references('id')->on('Aprendizs');
			$table->foreign('Fk_seguimiento')->references('id')->on('seguimientos');
			$table->foreign('Fk_IdOpcion')->references('id')->on('Opcions');
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
		Schema::drop('Encuesta_Opcion');
	}

}
