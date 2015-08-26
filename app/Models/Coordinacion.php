<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model {

		//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'coordinacions';
	protected $fillable =['Nombre_Coordinacion'];
	protected $guarder =['id'];

}
