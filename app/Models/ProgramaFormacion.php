<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramaFormacion extends Model {

		//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'programa_formacions';
	protected $fillable =['Nombre_Programa','Fk_IdCoordinacion'];
	protected $guarded =['id'];

}
