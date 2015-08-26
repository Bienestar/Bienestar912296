<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model {
//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 

	protected $table = 'areas';
	protected $fillable =['Tipo_Area'];
	protected $guarded =['id'];
}
