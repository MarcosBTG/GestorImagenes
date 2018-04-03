<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;

class IniciarSesionRequest extends Request {

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
			'email' => 'required|email', 
			'password' => 'required',
		];
	}

	public function messages()
	{
		return [
			'email.required' => 'El email es requerido',
			'email.email' => 'El formato email no es correcto', 
			'password.required' => 'La contraseña es requerida',
		];
	}

}