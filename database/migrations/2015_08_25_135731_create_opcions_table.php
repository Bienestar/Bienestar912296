<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpcionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opcions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Item_Opcion');
			$table->timestamps();

			//asignamos el atributo de llave foranea
			$table->integer('Fk_IdPregunta')->unsigned();

			//creamos la relacion
			$table->foreign('Fk_IdPregunta')->references('id')->on('Preguntas');
			

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()30
	{
		Schema::drop('opcions');
	}

}
