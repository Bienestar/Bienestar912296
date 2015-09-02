<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CrearFichaRequest extends Request {

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

		'Numero_Ficha' 	=> 'required|unique:Ficha_Caracterizacions,Numero_Ficha',
			'FechaInicio_Ficha'	=> 'required',
			'FechaFin_Ficha'	=> 'required'
			//
		];
	}

}
