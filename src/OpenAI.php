<?php

namespace FilippoToso\OpenAI;

use FilippoToso\Api\Sdk\Sdk;
use FilippoToso\OpenAI\Endpoints\AudioEndpoint;
use FilippoToso\OpenAI\Endpoints\ChatEndpoint;
use FilippoToso\OpenAI\Endpoints\CompletionsEndpoint;
use FilippoToso\OpenAI\Endpoints\EditsEndpoint;
use FilippoToso\OpenAI\Endpoints\EmbeddingsEndpoint;
use FilippoToso\OpenAI\Endpoints\FilesEndpoint;
use FilippoToso\OpenAI\Endpoints\FineTunesEndpoint;
use FilippoToso\OpenAI\Endpoints\ImagesEndpoint;
use FilippoToso\OpenAI\Endpoints\ModelsEndpoint;
use FilippoToso\OpenAI\Endpoints\ModerationsEndpoint;

class OpenAI extends Sdk
{
    /**
     * Audio endpoint
     *
     * @return AudioEndpoint
     */
    public function audio(): AudioEndpoint
    {
        return new AudioEndpoint($this);
    }

    /**
     * Chat endpoint
     *
     * @return ChatEndpoint
     */
    public function chat(): ChatEndpoint
    {
        return new ChatEndpoint($this);
    }

    /**
     * Completions endpoint
     *
     * @return CompletionsEndpoint
     */
    public function completions(): CompletionsEndpoint
    {
        return new CompletionsEndpoint($this);
    }

    /**
     * Edits endpoint
     *
     * @return EditsEndpoint
     */
    public function edits(): EditsEndpoint
    {
        return new EditsEndpoint($this);
    }

    /**
     * Embeddings endpoint
     *
     * @return EmbeddingsEndpoint
     */
    public function embeddings(): EmbeddingsEndpoint
    {
        return new EmbeddingsEndpoint($this);
    }

    /**
     * Files endpoint
     *
     * @return FilesEndpoint
     */
    public function files(): FilesEndpoint
    {
        return new FilesEndpoint($this);
    }

    /**
     * Fine-tunes endpoint
     *
     * @return FineTunesEndpoint
     */
    public function fineTunes(): FineTunesEndpoint
    {
        return new FineTunesEndpoint($this);
    }

    /**
     * Images endpoint
     *
     * @return ImagesEndpoint
     */
    public function images(): ImagesEndpoint
    {
        return new ImagesEndpoint($this);
    }

    /**
     * Models endpoint
     *
     * @return ModelsEndpoint
     */
    public function models(): ModelsEndpoint
    {
        return new ModelsEndpoint($this);
    }

    /**
     * Moderations endpoint
     *
     * @return ModerationsEndpoint
     */
    public function moderations(): ModerationsEndpoint
    {
        return new ModerationsEndpoint($this);
    }
}
