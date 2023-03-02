<?php

namespace FilippoToso\OpenAI\Endpoints;

use FilippoToso\Api\Sdk\Support\Response;

class ImagesEndpoint extends Endpoint
{
    /**
     * Create images
     * @see https://platform.openai.com/docs/api-reference/images/create
     * @return Response
     */
    public function generations(string $prompt, int $n = 1, string $size = '1024x1024', string $response_format = 'url', string $user = null): Response
    {
        return $this->post('/images/generations', [], $this->payload(__METHOD__, func_get_args()));
    }

    /**
     * Create image edit
     * @see https://platform.openai.com/docs/api-reference/images/create-edit
     * @return Response
     */
    public function edit(string $image, string $prompt, string $mask = null, int $n = 1, string $size = '1024x1024', string $response_format = 'url', string $user = null): Response
    {
        return $this->post('/images/edits', [], $this->payload(__METHOD__, func_get_args()));
    }

    /**
     * Create image variations
     * @see https://platform.openai.com/docs/api-reference/images/create
     * @return Response
     */
    public function variations(string $image, string $prompt, int $n = 1, string $size = '1024x1024', string $response_format = 'url', string $user = null): Response
    {
        return $this->post('/images/variations', [], $this->payload(__METHOD__, func_get_args()));
    }
}
