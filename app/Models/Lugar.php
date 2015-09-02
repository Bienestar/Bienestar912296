<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model {

	//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'lugars';
	protected $fillable =['Nombre_Lugar','Tipo_Lugar','Descripcion'];
	protected $guarded =['id'];

<<<<<<< HEAD
	public function scopeName($query, $name)
	{
		if(trim($name) !="")
		{
		$query->where('Nombre_Lugar',"like", "%$name%");
		}
	}

=======
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
}
