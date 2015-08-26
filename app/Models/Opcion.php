<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opcion extends Model {

	//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'opcions';
	protected $fillable =['Item_Opcion','Fk_IdPregunta'];
	protected $guarded =['id'];

}
