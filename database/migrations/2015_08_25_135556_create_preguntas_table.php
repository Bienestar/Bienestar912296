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

			

			//asignamos el atributoo de la llave foranea
			$table->integer('Fk_IdEncuesta')->unsigned();

			//creamos la relacion
			$table->foreign('Fk_IdEncuesta')->references('id')->on('Encuestas');
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
