<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesorEventoTable extends Migration {

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
		
			//asignamos el atributo de la llave foranea
			$table->integer('Fk_IdAsesor')->unsigned();
			$table->integer('Fk_IdEvento')->unsigned();
			
			//creamos las relaciones
			$table->foreign('Fk_IdAsesor')->references('id')->on('asesors');
			
			$table->foreign('Fk_IdEvento')->references('id')->on('eventos');
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
		Schema::drop('Asesor_Evento');
	}

}
