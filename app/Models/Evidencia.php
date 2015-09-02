<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model {

	//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'evidencias';
	protected $fillable =['Nombre_Evidencia','Archivo_Evidencia','Fk_IdAprendiz_Actividad'];
	protected $guarded =['id'];

<<<<<<< HEAD

	public function scopeNombre($query, $nombre)
	{
		if(trim($nombre !="")){

			$query->where('Fk_IdAprendiz_Actividad',"like","%nombre%");

		}

	}

=======
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
}
