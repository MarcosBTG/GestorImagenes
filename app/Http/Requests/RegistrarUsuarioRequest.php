<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;

class RegistrarUsuarioRequest extends Request {

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
			'nombre' => 'required|max:255',
			'email' => 'required|email|max:255|unique:usuarios',
			'password' => 'required|confirmed|min:6',
			'pregunta' => 'required|max:255',
			'respuesta' => 'required|max:255'
		];
	}

	public function messages()
	{
		return [
			'nombre.required' => 'El nombre es requerido.',
			'email.required' => 'El email es requerido.',
			'email.email' => 'El formato email no es correcto.',
			'email.exists' => 'El correo no existe.', 
			'password.required' => 'La contraseña es requerida.',
			'password.min' => 'La contraseña debe ser mayor a 6 caracteres.',
			'pregunta.required' => 'El campo pregunta es requerido',
			'respuesta.required' => 'El campo respuesta es requerido.',
		];
	}

}
