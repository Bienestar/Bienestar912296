<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Nombre_Evento', 30);
			$table->date('FechaIncio_Evento');
			$table->date('FechaFinalizacion_Evento');
			$table->string('Direccion_Evento', 60);
			$table->string('Restricciones', 300);
			$table->BigInteger('Cupos_Envento');
			$table->string('Descripcion_Envento', 350);
			$table->char('Estado_Evento');
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
		Schema::drop('eventos');
	}

}
