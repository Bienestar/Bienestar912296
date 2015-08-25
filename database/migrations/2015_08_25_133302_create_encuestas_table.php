<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncuestasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('encuestas', function(Blueprint $table)
		{
			$table->increments('id'); 
			$table->date('Fecha_Encuesta');
			$table->BigInteger('NumHermanos_Encuesta');
			$table->string('MotivoConsullta_Encuesta', 300);
			$table->BigInteger('NumEmbarazos_Encuesta');
			$table->BigInteger('NumAbortos_Encuesta');
			$table->char('Genero_Encuesta');
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
		Schema::drop('encuestas');
	}

}
