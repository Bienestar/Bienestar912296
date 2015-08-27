<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model {

	//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'grupos';
	protected $fillable =['Tipo_Grupo','Fk_IdAsesor'];
	protected $guarded =['id'];

}
