<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evidencias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Nombre_Evidencia', 40);
			$table->binary('Archivo_Evidencia');
			
			//asignamos atributo de la llave foranea
			$table->integer('Fk_IdAprendiz_Actividad')->unsigned();

			//creamos relaciones
			$table->foreign('Fk_IdAprendiz_Actividad')->references('id')->on('Aprendiz_Actividad');
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
		Schema::drop('evidencias');
	}

}
