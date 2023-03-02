<?php

namespace FilippoToso\OpenAI\Endpoints;

use FilippoToso\Api\Sdk\Support\Response;

class ModelsEndpoint extends Endpoint
{
    /**
     * List models
     * @see https://platform.openai.com/docs/api-reference/models/list
     * @return Response
     */
    public function list(): Response
    {
        return $this->get('/models');
    }

    /**
     * Retrieve model
     * @see https://platform.openai.com/docs/api-reference/models/retrieve
     * @return Response
     */
    public function retrieve(string $model): Response
    {
        return $this->get('/models/' . $model);
    }

    /**
     * Delete a model
     *
     * @see https://platform.openai.com/docs/api-reference/fine-tunes/delete-model
     * @return Response
     */
    public function delete(string $model)
    {
        return $this->delete('/models/' . $model);
    }
}
