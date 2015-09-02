<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model {

		//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'preguntas';
	protected $fillable =['Enunciado','Tipo_pregunta','Fk_opciones'];
	protected $guarded =['id'];

}
