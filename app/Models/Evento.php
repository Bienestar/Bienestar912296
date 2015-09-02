<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

	
	//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'eventos';
	protected $fillable =['Nombre_Evento','FechaIncio_Evento','FechaFinalizacion_Evento','Direccion_Evento','Restricciones','Cupos_Envento','Descripcion_Envento','Estado_Evento'];
	protected $guarded =['id'];

<<<<<<< HEAD

	public function scopeName($query, $name)
	{
		if(trim($name !=""))
		{
			$query->where('Nombre_Evento',"like", "%$name%");

		}
			

	}
		

=======
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
}
