<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class CrearFotoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		//se verifica que la foto sea del usuario
		$user = Auth::user();

		$id = $this->get('id');
		$album = $user->albumes()->find($id);

		if ($album) {
			return true;
		}

		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'id' => 'required|exists:albumes,id',
			'nombre' => 'required',
			'descripcion' => 'required',
			'imagen' => 'required|image|max:20000'
		];
	}

	public function messages() {
		return[
			'nombre.required' => 'El nombre de la foto es requerido',
			'descripcion.required.' => 'La descripcion es requerido',
			'foto.required' => 'El campo foto es requerido',
			'foto.max' => 'Se exede el tamaño permitido'
		];
	}

}
