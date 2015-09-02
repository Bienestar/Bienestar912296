<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadAcudienteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Actividad_Acudiente', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

			//asignamos atributo de la llave foranea
			$table->integer('Fk_IdActividad')->unsigned();
			$table->integer('Fk_IdAcudiente')->unsigned();


			//creamos la relacion
			$table->foreign('Fk_IdAcudiente')->references('id')->on('Acudientes');
			$table->foreign('Fk_IdActividad')->references('id')->on('Actividads');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Actividad_Acudiente');
	}

}
