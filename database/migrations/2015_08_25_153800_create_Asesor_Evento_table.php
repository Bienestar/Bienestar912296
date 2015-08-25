<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesorAprendizTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Asesor_Evento', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Asistentes_AsEv', 60);
			$table->string('Tipo_AsEv', 100);

			$table->timestamps();

			//asignamos el atributo de la llave foranea
			$table->integer('Fk_IdAsesor')->unsigned();
			$table->ineger('Fk_IdEvento')->Unsigned();


			//creamos las relaciones
			$table->foreign('Fk_IdEvento')->references('id')->on('Eventos');
			$table->foreign('Fk_IdAsesor')->references('id')->on('Asesors');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Asesor_Evento');
	}

}
