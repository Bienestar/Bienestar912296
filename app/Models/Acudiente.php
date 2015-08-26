<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acudiente extends Model {
//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 

		protected $table = 'acudientes';
	protected $fillable =['TipoDoc_Acudiente','Nombre_Acudiente','Apellido_Acudiene','Teleofono_Acudiene','Direccion_Acudiente','Ncelular_Acudineee'];
	protected $guarder =['id'];

}
