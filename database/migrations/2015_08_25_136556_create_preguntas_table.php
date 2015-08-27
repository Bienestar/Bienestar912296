<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preguntas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Enunciado',100);
			$table->string('Tipo_pregunta', 20);
			

			//asignamos el atributoo de la llave foranea
			$table->integer('Fk_opciones')->unsigned();

			//creamos la relacion
			$table->foreign('Fk_opciones')->references('id')->on('preguntas');
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
		Schema::drop('preguntas');
	}

}
