<?php

namespace App\Modules\Polls\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @resource PollCampaingCreateRequest
 *
 * Request para validacion de la creacion de un PollCampaingCreateRequest
 *
 * @author Danny Rojas Reyes, @rojasknight
 *
 */

class PollCampaingCreateRequest extends FormRequest
{
    /**
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
     * rules
     *
     * Toma las reglas de valudación para aplicar a los request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'max_questions' => 'required|numeric|min:1',
            'start_at'      => 'required|date',
            'finish_at'     => 'required|date',

        ];
    }

    /**
     * response
     *
     * Respuesta en formato JSON SI existen errores en el request
     *
     * @param  array  $errors
     *
     * @return JSON response()
     */

    public function response(array $errors)
    {
        return response([
            'message' => 'El formulario contiene errores',
            'errors'  => $errors,

        ], 422);
    }
}
