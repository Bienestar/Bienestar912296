<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CrearLugarRequest extends Request {

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
			'Nombre_Lugar' 	=> 'required|unique:lugars,Nombre_Lugar',
			'Tipo_Lugar'	=> 'required|string',
			'Descripcion'	=> 'required|numeric'
		];
	}

}
