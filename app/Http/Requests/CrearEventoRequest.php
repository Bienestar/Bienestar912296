<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CrearEventoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'Nombre_Evento'				=> 'required|string',
			'FechaIncio_Evento'			=> 'required',
			'FechaFinalizacion_Evento'	=> 'required',	
			'Direccion_Evento'			=> 'required',
			'Restricciones'				=> 'required',	
			'Cupos_Envento'				=> 'required|number',
			'Descripcion_Envento'		=> 'required',
			'Estado_Evento'				=> 'required|string'
		];
	}

}
