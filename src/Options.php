<?php

namespace FilippoToso\OpenAI;

use FilippoToso\Api\Sdk\Support\Options as BaseOptions;

class Options extends BaseOptions
{
    public function __construct(array $options = [])
    {
        $options = [
            'uri' => 'https://api.openai.com/v1',
            'headers' => array_filter([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $options['apiKey'] ?? null,
                'OpenAI-Organization' => $options['organizationId'] ?? null,
            ]),
        ];

        parent::__construct($options);
    }
}
