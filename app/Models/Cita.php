<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model {

		//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'citas';
	protected $fillable =['Fecha_Cita','Hora_Cita','Estado_Cita','Fk_IdAprendiz','Fk_IdLugar','Fk_IdAsesor'];
	protected $guarder =['id'];

}
