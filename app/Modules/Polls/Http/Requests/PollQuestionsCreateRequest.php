<?php

namespace App\Modules\Polls\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @resource PollQuestionsCreateRequest
 *
 * Request para validacion de la creacion de un PollQuestionsCreateRequest
 *
 * @autor Danny Rojas Reyes, @rojasknight
 *
 */

class PollQuestionsCreateRequest extends FormRequest
{
    /**
     *
     *authorize
     *
     * Determina si el usuario esta autorizado para hacer este request.
     *
     * @return bool
     */

    public function authorize()
    {
        return true;
    }

    /**
     *
     * rules
     *
     * Toma las reglas de valudación para aplicar a los request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'title'       => 'required|string|min:3|max:45',
            'description' => 'required|string|min:3|max:45',
        ];
    }

    /**
     * Respuesta en formato JSON SI existen errores en el request
     * @param  array  $errors
     * @return JSON Response()
     */

    public function response(array $errors)
    {
        return response([
            'message' => 'El formulario contiene errores',
            'errors'  => $errors,
        ], 422);
    }
}
