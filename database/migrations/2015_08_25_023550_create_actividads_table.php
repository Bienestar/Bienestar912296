<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actividads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Nombre_Act', 40);
			$table->string('Descripcion_Act', 300);
			$table->date('Fecha_Act');
			$table->string('Tipo_Acti');
			$table->string('Lider_Act');
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
		Schema::drop('actividads');
	}

}
