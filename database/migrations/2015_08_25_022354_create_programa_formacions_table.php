<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramaFormacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programa_formacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Nombre_Programa',60);
			$table->timestamps();

			//asignamos atributo de la llave foranea
			$table->integer('Fk_IdCoordinacion')->unsigned();

			//creamos la relacion
			$table->foreign('Fk_IdCoordinacion')->references('id')->on('Coordinacions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('programa_formacions');
	}

}
