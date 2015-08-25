<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprendizsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aprendizs', function(Blueprint $table)
		{
		    $table->increments('id');
		    $table->BigInteger('NumeroIdentificacion_Aprendiz');
			$table->string('TipoDoc_Aprendiz' 04);
			$table->string('Nombre_Aprendiz', 30);
			$table->string('Apellido_Aprendiz', 30);
			$table->string('Direccion_Aprendiz', 60);
			$table->BigInteger('Telefono_Aprendiz');
			$table->char('Genero_Aprendiz');
			$table->string('Email_Aprendiz');
			$table->BigInteger('FichaCaracterizacion');
			$table->password('Contraseña_Aprendiz');
			$table->string('Eps');
			$table->timestamps();

			//asignamos atributo de la llave foranea
			$table->integer('Fk_IdEncuesta_Opcion')->unsigned();
			$table->integer('Fk_IdFicha_Caracterizacion')->unsigned();

			//creamos la relacion
			$table->foreign('Fk_IdEncuesta_Opcion')->references('id')->on('Encuesta_Opcion');
			$table->foreign('Fk_IdFicha_Caracterizacion')->references('id')->on('FichaCaracterizacions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aprendizs');
	}

}
