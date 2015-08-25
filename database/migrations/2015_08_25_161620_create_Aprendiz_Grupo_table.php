<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendizGrupoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Aprendiz_Grupo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();

			//asignamos atributo de la llave foranea
			$table->integer('Fk_IdAprendiz')->unsigned();
			$table->integer('Fk_IdGrupo')->unsigned();

			//creamos la relacion
			$table->foreign('Fk_IdAprendiz')->references('id')->on('Aprendizs');
			$table->foreign('Fk_IdGrupo')->references('id')->on('Grupos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Aprendiz_Grupo');
	}

}
