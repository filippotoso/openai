<?php

namespace FilippoToso\OpenAI\Endpoints;

use FilippoToso\Api\Sdk\Support\Response;

class EditsEndpoint extends Endpoint
{
    /**
     * Create edit
     * @see https://platform.openai.com/docs/api-reference/edits
     * @return Response
     */
    public function create(string $model, string $instruction, string $input = '', int $n = 1, float $temperature = 1, float $top_p = 1): Response
    {
        return $this->post('/edits', [], $this->payload(__METHOD__, func_get_args()));
    }
}
