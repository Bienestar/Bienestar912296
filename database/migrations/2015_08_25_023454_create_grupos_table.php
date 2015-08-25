<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Tipo_Grupo', 60);
			$table->timestamps();

			//asignamos atributo de la llave foranea
			$table->integer('Fk_IdAsesor')->unsigned();


			//creamos la relacion
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
		Schema::drop('grupos');
	}

}
