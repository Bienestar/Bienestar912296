<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendizActividadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Aprendiz_Actividad', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Observaciones_ApAct',200);
			$table->timestamps();

			//asignamos atributos de la llave foranea
			$table->integer('Fk_IdAprendiz') ->unsigned();
			$table->integer('Fk_IdActividad') ->unsigned();

			//Creamos relaciones
			$table->Foreign('Fk_IdActividad')->references('id')->on('Actividads');
			$table->Foreing('Fk_IdAprendiz')->references('id')->on('Aprendizs');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Aprendiz_Actividad');
	}

}
