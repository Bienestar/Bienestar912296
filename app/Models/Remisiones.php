<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Remisiones extends Model {

		//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'remisiones';
	protected $fillable =['Tipo_Remision','Fecha_Remision','Descripcion_Remision','Fk_IdObservacion'];
	protected $guarded =['id'];


}
