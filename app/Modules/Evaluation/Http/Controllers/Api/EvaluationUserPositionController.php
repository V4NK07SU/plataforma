<?php

namespace App\Modules\Evaluation\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Modules\Evaluation\Http\Requests\EvaluationUserPositionCreateRequest;
use App\Modules\Evaluation\Models\EvaluationUserPosition;
use Illuminate\Http\Request;

/**
 * @resource EvaluationUserPositionController
 *
 * Recurso compromiso
 *
 * @author David Felipe Bustos <david_bustos17@hotmail.com>
 *
 */

class EvaluationUserPositionController extends Controller
{
    /**
     * index
     *
     * Retorna las respuestas del compromiso en formato JSON
     *
     * @return Response()
     */

    public function index()
    {

        $evaluationuserposition = EvaluationUserPosition::paginate(10);
        return $evaluationuserposition;
    }

    public function create()
    {
        //
    }

    /**
     * store
     *
     * Retorna en formato JSON una respuesta para guardar las respuestas de las encustas
     *
     * @param   Requests $request
     *
     * @return  JSON Response()
     */

    public function store(EvaluationUserPositionCreateRequest $request)
    {

        $evaluationuserposition = new EvaluationUserPosition();
        $evaluationuserposition->create($request->all());

        return response([
            'message' => 'creado con exito',
        ], 200);
    }

    /**
     * show
     *
     * Retorna un campo determinado de la tabla respuesta de compromiso
     *
     * @param  int $id
     *
     * @return JSON Response()
     */

    public function show($id)
    {
        $evaluationuserposition = EvaluationUserPosition::findOrFail($id);

        return $evaluationuserposition;
    }

    public function edit($id)
    {
        //
    }

    /**
     * update
     *
     * Actualiza los campos especificados en la base de datos.
     *
     * @param  Requests  $request
     *
     * @param  int  $id
     *
     * @return JSON Response()
     */

    public function update(EvaluationUserPositionCreateRequest $request, $id)
    {
        $evaluationuserposition = EvaluationUserPosition::findOrFail($id);
        $evaluationuserposition->update($request->all());

        if ($evaluationuserposition) {
            return response([
                'message' => 'La respuesta fue actualizada con exito',
            ], 200);
        }

    }

    /**
     * destroy
     *
     * Remueve el campo especificado de la base de datos.
     *
     * @param  int  $id
     *
     *  @return JSON Response()
     */

    public function destroy($id)
    {
        $evaluationuserposition = EvaluationUserPosition::destroy($id);

        if ($evaluationuserposition) {

            return response([
                'message' => 'el Respuesta de compromiso eliminado con exito',
                'id'      => $id,
            ], 200);
        }
        return response([

            'message' => 'ha ocurrido un error el registro no ha sido eliminado',
            'id'      => $id,
        ], 401);
    }
}
