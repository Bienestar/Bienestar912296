<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

	
	//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'eventos';
	protected $fillable =['Nombre_Evento','FechaIncio_Evento','FechaFinalizacion_Evento','Direccion_Evento','Restricciones','Cupos_Envento','Descripcion_Envento','Estado_Evento'];
	protected $guarder =['id'];

}
