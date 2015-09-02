<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model {
//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 

	protected $table = 'actividads';
	protected $fillable =['Nombre_Act','Descripcion_Act','Fecha_Act','Tipo_Act','Lider_Act','Fk_IdGrupo'];
	protected $guarded =['id'];

}
