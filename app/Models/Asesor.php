<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model {
	//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
	protected $table = 'areas';
	protected $fillable =['NumeroIdentificacion_Asesor','TipoDoc_Asesor','Nombre_Asesor','Apellido_Asesor','Direccion_Asesor','Telefono_Asesor','Genero_Asesor','Email_Asesor','Contraseña_Asesor','Cargo_Asesor','Fk_IdArea'];
	protected $guarded =['id'];

}
