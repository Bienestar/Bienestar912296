<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FichaCaracterizacion extends Model {

	//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'ficha_caracterizacions';
	protected $fillable =['Numero_Ficha','FechaInicio_Ficha','FechaFin_Ficha','Fk_IdProgramaFormacion'];
	protected $guarded =['id'];

}
