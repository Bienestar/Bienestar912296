<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seguimientos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->Date('Fecha_Encuesta');
			$table->integer('Numero_hermanos');
			$table->string('Motivo_consulta');
			$table->string('Nombre_persona_remite', 20);
			$table->string('Observaciones', 250);
			$table->integer('Fk_ficha')->unsigned();
			$table->foreign('Fk_ficha')->references('id')->on('ficha_caracterizacions');
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
		Schema::drop('seguimientos');
	}

}
