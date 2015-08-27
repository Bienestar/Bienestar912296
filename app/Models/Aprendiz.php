<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model {
//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 

	protected $table = 'aprendizs';
	protected $fillable =['NumeroIdentificacion_Aprendiz','TipoDoc_Aprendiz','Nombre_Aprendiz','Apellido_Aprendiz','Direccion_Aprendiz','Telefono_Aprendiz','Genero_Aprendiz','Email_Aprendiz','FichaCaracterizacion','Contraseña_Aprendiz','Eps'];
	protected $guarded =['id'];

}
