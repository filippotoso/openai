<?php

namespace FilippoToso\OpenAI\Laravel;

use FilippoToso\OpenAI\OpenAI;
use FilippoToso\OpenAI\Options;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton(OpenAI::class, function () {
            $options = new Options([
                'apiKey' => config('services.openai.api_key'),
                'oprganizationId' => config('services.openai.oprganization_id'),
            ]);

            return new OpenAI($options);
        });
    }
}
