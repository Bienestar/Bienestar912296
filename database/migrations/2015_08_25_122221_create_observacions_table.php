<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObservacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('observacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('Fecha_Obs');
			$table->string('Descripcion_Obs',100);
			$table->BigInteger('NumeroSesiones_Obs');
			
			//asignamos atributo de la llave foranea
			$table->integer('Fk_IdCita')->unsigned();

			//creamos la relacion
			$table->foreign('Fk_IdCita')->references('id')->on('Citas');
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
		Schema::drop('observacions');
	}

}
