<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CrearAprendizRequest extends Request {

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

		'NumeroIdentificacion_Aprendiz' => 'required|unique:Aprendizs,NumeroIdentificacion_Aprendiz',
			'TipoDoc_Aprendiz'=> 'required|string',
			'Nombre_Aprendiz'=> 'required|string',
			'Apellido_Aprendiz'=> 'required|string',
			'Direccion_Aprendiz'=> 'required|string',
			'Telefono_Aprendiz'=> 'required|numeric',
			'Genero_Aprendiz'=> 'required|string',
			'Email_Aprendiz'=> 'required|string',
			'Contraseña_Aprendiz'=> 'required|string',
			'Eps'	=> 'required|string'

			//
		];
	}

}
