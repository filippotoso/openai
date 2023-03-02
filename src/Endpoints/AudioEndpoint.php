<?php

namespace FilippoToso\OpenAI\Endpoints;

use FilippoToso\Api\Sdk\Support\Response;

class AudioEndpoint extends Endpoint
{
    /**
     * Create transcription
     * @see https://platform.openai.com/docs/api-reference/audio/create
     * @return Response
     */
    public function transcriptions(string $file, string $model, $prompt = '', $response_format = 'json', float $temperature = 0, $language = null): Response
    {
        return $this->post('/audio/transcriptions', [], $this->payload(__METHOD__, func_get_args()));
    }

    /**
     * Create translation
     * @see https://platform.openai.com/docs/api-reference/audio/create
     * @return Response
     */
    public function translations(string $file, string $model, $prompt = '', $response_format = 'json', float $temperature = 0, $language = null): Response
    {
        return $this->post('/audio/translations', [], $this->payload(__METHOD__, func_get_args()));
    }
}
