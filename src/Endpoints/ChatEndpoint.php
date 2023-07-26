<?php

namespace FilippoToso\OpenAI\Endpoints;

use FilippoToso\Api\Sdk\Support\Response;

class ChatEndpoint extends Endpoint
{
    /**
     * Create a chat completion
     * @see https://platform.openai.com/docs/api-reference/chat/create
     * @return Response
     */
    public function create(string $model, array $messages, float $temperature = 1, float $top_p = 1, int $n = 1, bool $stream = false, int $max_tokens = null, float $presence_penalty = 0, float $frequency_penalty = 0, mixed $logit_bias = null, string $user = null): Response
    {
        return $this->post('/chat/completions', [], $this->payload(__METHOD__, func_get_args()));
    }
}
