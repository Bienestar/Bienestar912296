<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNovedadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('novedads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Tipo_Novedad', 30);
			$table->string ('Descripcion',300);
			$table->timestamps();

			//asignamos nuevo atributo para llave foranea
			$table->integer('Fk_IdAsesor')->unsigned();

			//creamos la relacion
			$table->Foreign('Fk_IdAsesor')->references('id')->on('Asesors');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('novedads');
	}

}
