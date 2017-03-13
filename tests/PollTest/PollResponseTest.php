<?php

/**
 * @resource PollResponseTest
 *
 * Clase donde se encuentran los metodos para el respectivo test
 *
 * @author Danny Rojas Reyes, @rojasknight
 *
 */

class PollResponseTest extends TestCase
{

    /**
     * testPollUserStore
     *
     * prueba para crear un usuario (relacion)
     *
     * JSON
     */

    public function testPollUserStore()
    {
        $this->post('/api/polls/users', [
            'first_name' => 'example',
            'last_name'  => 'example',
            'email'      => 'example@mail.com',
            'password'   => '123456',
        ])
            ->seeJson([
                'message' => 'El usuario se ha creado con exito',
            ]);
    }

    /**
     * testPollTypeStore
     *
     * prueba para crear un tipo de encuesta (relacion)
     *
     * JSON
     */

    public function testPollTypeStore()
    {
        $this->post('/api/polls/polltypes', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'El tipo de encuesta se ha creado con exito',
            ]);
    }

    /**
     * testPollQuestionTypesStore
     *
     * prueba para crear un tipo de pregunta(relacion)
     *
     * JSON
     */

    public function testPollQuestionTypesStore()
    {
        $this->post('/api/polls/pollquestiontypes', [
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'El tipo de pregunta fue creado con exito',
            ]);
    }

/**
 * testPollStore
 *
 * prueba para crear una encuesta (relacion)
 *
 * JSON
 */

    public function testPollStore()
    {
        $this->post('/api/polls/polls', [
            'title'         => 'example',
            'description'   => 'example',
            'poll_types_id' => 1,
            'user_id'       => 1,
        ])
            ->seeJson([
                'message' => 'la encuesta fue creada con exito',
            ]);
    }

    /**
     * testPollItemStore
     *
     * prueba para crear un item de encuesta(relacion)
     *
     * JSON
     */

    public function testPollItemStore()
    {
        $this->post('/api/polls/pollitems', [
            'poll_id'     => 1,
            'title'       => 'example',
            'description' => 'example',
        ])
            ->seeJson([
                'message' => 'El item de la encuesta se ha creado con exito',
            ]);
    }

    /**
     * testPollQuestionStore
     *
     * prueba para crear una pregunta de  una encuesta (relacion)
     *
     * JSON
     */

    public function testPollQuestionStore()
    {
        $this->post('/api/polls/pollquestions', [
            'poll_item_id'          => 1,
            'poll_question_type_id' => 1,
            'title'                 => 'example',
            'description'           => 'example',
            'risk_var_id'           => 1,
        ])
            ->seeJson([
                'message' => 'la pregunta de la encuesta se ha creado con exito',
            ]);
    }

    /**
     * testPollResponseStore
     *
     * prueba para crear un respuesta de encuesta
     *
     * JSON
     */

    public function testPollResponseStore()
    {
        $this->post('/api/polls/pollresponses', [
            'user_id'          => 1,
            'poll_id'          => 1,
            'poll_question_id' => 1,
            'response'         => 'example',
            'responded_date'   => '2017-09-09 00:00:00',
        ])->seeJson([
            'message' => 'la respuesta fue creada con exito',
        ]);
    }

    /**
     * testPollResponseIndex
     *
     * prueba a mostrar los respuestas de encuesta
     *
     * JSON
     */

    public function testPollResponseIndex()
    {
        $this->get('/api/polls/pollresponses')
            ->seeJson([
                'user_id'          => 1,
                'poll_id'          => 1,
                'poll_question_id' => 1,
                'response'         => 'example',
                'responded_date'   => '2017-09-09 00:00:00',
            ]);
    }

    /**
     * testPollResponseUpdate
     *
     * prueba para actualizar una respuesta de encuesta
     *
     * JSON
     */

    public function testPollResponseUpdate()
    {
        $this->put('/api/polls/pollresponses/1', [
            'response'       => 'exampleUpdatee',
            'responded_date' => '2017-11-11 01:01:01',
        ])
            ->seeJson([
                'message' => 'La respuesta de encuesta fue actualizada con exito',
            ]);
    }

    /**
     * testPollResponseShow
     *
     * prueba a mostrar las respuesta de encuesta
     *
     * JSON
     */

    public function testPollResponseShow()
    {
        $this->get('/api/polls/pollresponses/1')
            ->seeJson([
                'user_id'          => 1,
                'poll_id'          => 1,
                'poll_question_id' => 1,
                'response'         => 'exampleUpdatee',
                'responded_date'   => '2017-11-11 01:01:01',
            ]);
    }

    /**
     * testPollResponseDelete
     *
     * prueba para eliminar una respuesta de encuesta
     *
     * JSON

    public function testPollResponseDelete()
    {
    $this->delete('/api/pollresponses/1')
    ->seeJson([
    'message' => 'La respuesta de encuesta se he eliminado con exito',
    ]);

    }
     */

}
