<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;

class EditarPerfilRequest extends Request {

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
	public function rules() {
		return [
			'nombre' => 'required', 
			'password' => 'min:6|confirmed',
			'pregunta' => '',
			'respuesta' => 'required_with:pregunta'
		];
	}

	public function messages() {
		return [
			'nombre.required' => 'El nombre es requerido.',
			'password.min' => 'La contraseña debe ser mayor a 6 caracteres.',
			'respuesta.required_with' => 'El campo respuesta es requerido.',
		];
	}

}
