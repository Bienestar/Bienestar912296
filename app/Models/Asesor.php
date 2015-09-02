<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model {
	//declaramos los atributos declarando la tabla con $table, el fillable atributos que se puede modificar $guarder que jamas seran modificados 
<<<<<<< HEAD
	protected $table = 'asesors';
=======
	protected $table = 'areas';
>>>>>>> 1b7ec500e165037160fb213dcb5f8bd45bfcf344
	protected $fillable =['NumeroIdentificacion_Asesor','TipoDoc_Asesor','Nombre_Asesor','Apellido_Asesor','Direccion_Asesor','Telefono_Asesor','Genero_Asesor','Email_Asesor','Contraseña_Asesor','Cargo_Asesor','Fk_IdArea'];
	protected $guarded =['id'];

}
