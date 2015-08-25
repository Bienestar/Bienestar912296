<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsesorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asesors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('TipoDoc_Asesor', 04);
			$table->string('Nombre_Asesor', 30);
			$table->string('Apellido_Asesor', 30);
			$table->string('Direccion_Asesor', 60);
			$table->BigInteger('Telefono_Asesor');
			$table->char('Genero_Asesor');
			$table->string('Email_Asesor', 60);
			$table->password('Contraseña');
			$table->string('Cargo_Asesor', 10);
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
		Schema::drop('asesors');
	}

}
