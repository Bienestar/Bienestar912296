<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('citas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('Fecha_Cita');
			$table->time('Hora_Cita');
			$table->char('Estado_Cita');
			
			//asignamos atributo de la llave foranea
			$table->integer('Fk_IdAprendiz')->unsigned();
			$table->integer('Fk_IdLugar')->unsigned();
			$table->integer('Fk_IdAsesor')->unsigned();

			//creamos la relaciones
			$table->foreign('Fk_IdAprendiz')->references('id')->on('Aprendizs');
		     $table->foreign('Fk_IdLugar')->references('id')->on('Lugars');
		     $table->foreign('Fk_IdAsesor')->references('id')->on('Asesors');
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
		Schema::drop('citas');
	}

}
