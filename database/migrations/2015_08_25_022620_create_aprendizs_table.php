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
			$table->string('TipoDoc_Aprendiz', 4);
			$table->string('Nombre_Aprendiz', 30);
			$table->string('Apellido_Aprendiz', 30);
			$table->string('Direccion_Aprendiz', 60);
			$table->BigInteger('Telefono_Aprendiz');
			$table->char('Genero_Aprendiz');
			$table->string('Email_Aprendiz');
			$table->String('Contraseña_Aprendiz');
			$table->string('Eps');
			

			//asignamos atributo de la llave foranea
			
			$table->integer('Fk_IdFicha_Caracterizacion')->unsigned();

			//creamos la relacion
			
			$table->foreign('Fk_IdFicha_Caracterizacion')->references('id')->on('Ficha_Caracterizacions');
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
		Schema::drop('aprendizs');
	}

}
