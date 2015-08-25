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
			$table->timestamps();

			//asignamos el atributo de la llave foranea
			$table->integer('Fk_IdOpcion')->unsigned();
			$table->integer('Fk_IdEncuesta')->unsigned();

			//creamos la relacion
			$table->foreign('Fk_IdOpcion')->references('id')->on('Opcions');
			$table->foreign('Fk_IdEncuesta')->references('id')->on('Encuestas');
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
