<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model {

	protected $table = 'seguimientos';
	protected $fillable =['Fecha_Encuesta','Numero_hermanos','Motivo_consulta','Nombre_persona_remite','Observaciones','Fk_ficha'];
	protected $guarded =['id'];

}
