<?php

namespace FilippoToso\OpenAI\Endpoints;

use FilippoToso\Api\Sdk\Support\Response;

class ModerationsEndpoint extends Endpoint
{
    /**
     * Create moderation
     * @see https://platform.openai.com/docs/api-reference/moderations
     * @return Response
     */
    public function create(string $input, string $model = ''): Response
    {
        return $this->post('/moderations', [], $this->payload(__METHOD__, func_get_args()));
    }
}
