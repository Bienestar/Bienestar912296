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
			$table->String('Nombre_Acudiente', 20);
			$table->String('Apellido_Acudiene');
			$table->BigInteger('Teleofono_Acudiene');
			$table->String('Direccion_Acudiente', 60);
			$table->BigInteger('Ncelular_Acudineee');
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
