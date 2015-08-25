<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemisionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('remisiones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Tipo_Remision', 60);
			$table->Date('Fecha_Remision');
			$table->string('Descripcion_Remision', 300);
			

			//asignamos atributo de la llave foranea
			$table->integer('Fk_IdObservacion')->unsigned();


			//creamos la relacion
			$table->foreign('Fk_IdObservacion')->references('id')->on('Observacions');
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
		Schema::drop('remisiones');
	}

}
