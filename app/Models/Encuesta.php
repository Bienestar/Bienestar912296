<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model {

			//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'encuestas';
	protected $fillable =['Fecha_Encuesta','NumHermanos_Encuesta','MotivoConsullta_Encuesta','NumEmbarazos_Encuesta','NumAbortos_Encuesta','Genero_Encuesta'];
	protected $guarder =['id'];

}
