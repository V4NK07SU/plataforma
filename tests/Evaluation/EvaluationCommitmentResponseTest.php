<?php

class EvaluationCommitmentResponseTest extends TestCase
{
    /**
     * PivotTableEvaluationUserPosition
     *
     * prueba para crear una evaluacion.(Relacion)
     *
     * JSON .
     */

    public function testEvaluationLevelStore()
    {
        $this->post('/api/evaluations/levels', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'El nivel de evaluacion fue creado con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion. (Relacion)
     *
     * JSON .
     */

    public function testEvaluationDependencyStore()
    {
        $this->post('/api/evaluations/dependencies', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'Dependencia de evaluacion fue creada con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion(Relacion).
     *
     * JSON .
     */

    public function testEvaluationPositionStore()
    {
        $this->post('/api/evaluations/positions', [
            'title'         => 'example',
            'description'   => 'example',
            'dependency_id' => 1,
            'level_id'      => 1,
        ])
            ->seeJson([
                'message' => 'Posicion de evaluacion fue creada con exito',
            ]);
    }

    /**
     * testPollUserStore
     *
     * prueba para crear un usuario (relacion)
     *
     * JSON
     */

    public function testPollUserStore()
    {
        $this->post('/api/users/register', [
            'email'    => 'example@mail.com',
            'password' => '123456',
        ])
            ->seeJson([
                'message' => 'el usuario  se ha ingresado con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion. (Relacion)
     *
     * JSON .
     */

    public function testEvaluationDependencyStoree()
    {
        $this->post('/api/evaluations/dependencies', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'Dependencia de evaluacion fue creada con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear el nivel de una evaluacion. (Relacion)
     *
     * JSON.
     */

    public function testEvaluationLevelStoree()
    {
        $this->post('/api/evaluations/levels', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'El nivel de evaluacion fue creado con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion.(Relacion)
     *
     * JSON .
     */

    public function testEvaluationPositionStoree()
    {
        $this->post('/api/evaluations/positions', [
            'title'         => 'example',
            'description'   => 'example',
            'dependency_id' => 1,
            'level_id'      => 1,
        ])
            ->seeJson([
                'message' => 'Posicion de evaluacion fue creada con exito',
            ]);
    }

    /**
     *
     * testEvaluationUserPositionStore
     *
     * prueba para crear una hora(Relacion)
     */

    public function testEvaluationUserPositionStore()
    {
        $this->post('/api/evaluations/user/position', [
            'user_id'     => 1,
            'position_id' => 1,
            'boss_id'     => 1,
        ])
            ->seeJson([
                'message' => 'creado con exito',
            ]);
    }

    /**
     *
     * testStore
     *
     * prueba para crear una hora(Relacion)
     */

    public function testEvaluationGlobalStore()
    {
        $this->post('/api/evaluations/global', [
            'period_stars'      => '2000-01-01 00:00:00',
            'period_ends'       => '2000-01-01 00:00:00',
            'commitments_stars' => '2000-01-01 00:00:00',
            'commitments_ends'  => '2000-01-01 00:00:00',
            'evaluation_stars'  => '2000-01-01 00:00:00',
            'evaluation_ends'   => '2000-01-01 00:00:00',
            'type_id'           => 1,
        ])
            ->seeJson([
                'message' => 'La evaluacion global fue creada con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion. (Relacion)
     *
     * JSON .
     */

    public function testEvaluationCompetenciesStore()
    {
        $this->post('/api/evaluations/competencies', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'la competencia fue creada con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion. (Relacion)
     *
     * JSON .
     */

    public function testEvaluationCompetenciesAnswerStore()
    {
        $this->post('/api/evaluations/competency/answers', [
            'description'   => 'example',
            'competency_id' => 1,
            'value'         => 1234,
        ])
            ->seeJson([
                'message' => 'la respuesta de la competencia fue creada con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion. (Relacion)
     *
     * JSON .
     */

    public function testEvaluationRollStore()
    {
        $this->post('/api/evaluations/roles', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'El roll de evaluacion fue creada con exito',
            ]);
    }

    /**
     * PivotTableEvaluationUserPosition
     *
     * prueba para crear una evaluacion.(Relacion)
     *
     * JSON .
     */

    public function testEvaluationLevellStore()
    {
        $this->post('/api/evaluations/levels', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'El nivel de evaluacion fue creado con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion. (Relacion)
     *
     * JSON .
     */

    public function testEvaluationDependencyyStore()
    {
        $this->post('/api/evaluations/dependencies', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'Dependencia de evaluacion fue creada con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion(Relacion).
     *
     * JSON .
     */

    public function testEvaluationPositionnStore()
    {
        $this->post('/api/evaluations/positions', [
            'title'         => 'example',
            'description'   => 'example',
            'dependency_id' => 1,
            'level_id'      => 1,
        ])
            ->seeJson([
                'message' => 'Posicion de evaluacion fue creada con exito',
            ]);
    }

    /**
     * testPollUserStore
     *
     * prueba para crear un usuario (relacion)
     *
     * JSON
     */

    public function testPollUserrStore()
    {
        $this->post('/api/users/register', [
            'email'    => 'example@mail.com',
            'password' => '123456',
        ])
            ->seeJson([
                'message' => 'el usuario  se ha ingresado con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion. (Relacion)
     *
     * JSON .
     */

    public function testEvaluationDependencyyStoree()
    {
        $this->post('/api/evaluations/dependencies', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'Dependencia de evaluacion fue creada con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear el nivel de una evaluacion. (Relacion)
     *
     * JSON.
     */

    public function testEvaluationLevellStoree()
    {
        $this->post('/api/evaluations/levels', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'El nivel de evaluacion fue creado con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion.(Relacion)
     *
     * JSON .
     */

    public function testEvaluationPositionnStoree()
    {
        $this->post('/api/evaluations/positions', [
            'title'         => 'example',
            'description'   => 'example',
            'dependency_id' => 1,
            'level_id'      => 1,
        ])
            ->seeJson([
                'message' => 'Posicion de evaluacion fue creada con exito',
            ]);
    }

    /**
     *
     * testEvaluationUserPositionStore
     *
     * prueba para crear una hora(Relacion)
     */

    public function testEvaluationUserPositionnStore()
    {
        $this->post('/api/evaluations/user/position', [
            'user_id'     => 1,
            'position_id' => 1,
            'boss_id'     => 1,
        ])
            ->seeJson([
                'message' => 'creado con exito',
            ]);
    }

    /**
     *
     * testStore
     *
     * prueba para crear una hora(Relacion)
     */

    public function testEvaluationGloballStore()
    {
        $this->post('/api/evaluations/global', [
            'period_stars'      => '2000-01-01 00:00:00',
            'period_ends'       => '2000-01-01 00:00:00',
            'commitments_stars' => '2000-01-01 00:00:00',
            'commitments_ends'  => '2000-01-01 00:00:00',
            'evaluation_stars'  => '2000-01-01 00:00:00',
            'evaluation_ends'   => '2000-01-01 00:00:00',
            'type_id'           => 1,
        ])
            ->seeJson([
                'message' => 'La evaluacion global fue creada con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion.(Relacion)
     *
     * JSON .
     */

    public function testEvaluationFunctionStore()
    {
        $this->post('/api/evaluations/functions', [
            'title'       => 'examplee',
            'description' => 'examplee',
        ])
            ->seeJson([
                'message' => 'Funcion de evaluacion creada con exito',
            ]);
    }

    /**
     * testEvaluationCommitmentsStore
     *
     * ////////.
     *
     * JSON .
     */

    public function testEvaluationCommitmentsStore()
    {
        $this->post('/api/evaluations/commitments', [
            'evaluation_id' => 1,
            'function_id'   => 1,
            'description'   => 'algo de mas',
            'evaluated_id'  => 1,
            'evaluator_id'  => 1,
        ])
            ->seeJson([
                'message' => 'el compromiso fue creado con exito',
            ]);
    }

    /**
     * testEvaluationStore
     *
     * prueba para crear una evaluacion.
     *
     * JSON .
     */

    public function testEvaluationCompetencyResponseStore()
    {
        $this->post('/api/evaluations/commitment/responses', [
            'evaluation_id' => 1,
            'commitment_id' => 1,
            'answer_id'     => 1,
            'evaluated_id'  => 1,
            'evaluator_id'  => 1,
            'rol_id'        => 1,

        ])
            ->seeJson([
                'message' => 'las respuesta del compromiso fue creado con exito',
            ]);
    }
}
