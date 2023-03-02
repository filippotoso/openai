<?php

namespace FilippoToso\OpenAI\Laravel;

use FilippoToso\OpenAI\OpenAI as BaseOpenAI;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \FilippoToso\OpenAI\Endpoints\AudioEndpoint audio()
 * @method static \FilippoToso\OpenAI\Endpoints\ChatEndpoint chat()
 * @method static \FilippoToso\OpenAI\Endpoints\CompletionsEndpoint completions()
 * @method static \FilippoToso\OpenAI\Endpoints\EditsEndpoint edits()
 * @method static \FilippoToso\OpenAI\Endpoints\EmbeddingsEndpoint embeddings()
 * @method static \FilippoToso\OpenAI\Endpoints\FilesEndpoint files()
 * @method static \FilippoToso\OpenAI\Endpoints\FineTunesEndpoint fineTunes()
 * @method static \FilippoToso\OpenAI\Endpoints\ImagesEndpoint images()
 * @method static \FilippoToso\OpenAI\Endpoints\ModelsEndpoint models()
 * @method static \FilippoToso\OpenAI\Endpoints\ModerationsEndpoint moderations()
 *
 * @see \FilippoToso\OpenAI\OpenAI
 */
class OpenAI extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BaseOpenAI::class;
    }
}
