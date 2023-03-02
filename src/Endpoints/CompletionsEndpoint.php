<?php

namespace FilippoToso\OpenAI\Endpoints;

use FilippoToso\Api\Sdk\Support\Response;

class CompletionsEndpoint extends Endpoint
{
    /**
     * Create completion
     * @see https: //platform.openai.com/docs/api-reference/completions/create
     * @return Response
     */
    public function create(string $model, mixed $prompt = '<|endoftext|>', string $suffix = null, int $max_tokens = 16, float $temperature = 1, float $top_p = 1, int $n = 1, bool $stream = false, int $logprobs = null, bool $echo = false, mixed $stop = null, float $presence_penalty = 0, float $frequency_penalty = 0, int $best_of = 1, mixed $logit_bias = null, string $user = null): Response
    {
        return $this->post('/completions', [], $this->payload(__METHOD__, func_get_args()));
    }
}
