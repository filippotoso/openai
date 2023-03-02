<?php

namespace FilippoToso\OpenAI\Endpoints;

use FilippoToso\Api\Sdk\Support\Response;

class EmbeddingsEndpoint extends Endpoint
{
    /**
     * Creates an embedding
     * @see https://platform.openai.com/docs/api-reference/embeddings/create
     * @return Response
     */
    public function create(string $model, string $input, string $user = null): Response
    {
        return $this->post('/edits', [], $this->payload(__METHOD__, func_get_args()));
    }
}
