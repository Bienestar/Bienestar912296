<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcudientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acudientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('TipoDoc_Acudiente');
			$table->string ('Nombre_Acudiente', 20);
			$table->string ('Apellido_Acudiene', 30);
			$table->bigInteger ('Teleofono_Acudiene';
			$table->string ('Direccion_Acudiente', 60);
			$table->bigInteger('Ncelular_Acudineee')
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
		Schema::drop('acudientes');
	}

}
