<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaCaracterizacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ficha_caracterizacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->BigInteger('Numero_Ficha');
			$table->date('FechaInicio_Ficha');
			$table->date('FechaFin_Ficha');

			//asignamos atributo de la llave foranea
			$table->integer('Fk_IdProgramaFormacion')->unsigned();

			//creamos la relaciones
			$table->foreign('Fk_IdProgramaFormacion')->references('id')->on('Programa_Formacions');
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
		Schema::drop('ficha_caracterizacions');
	}

}
