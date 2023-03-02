# OpenAI unofficial PHP SDK

A simple SDK to use OpenAI APIs

## Requirements

- PHP 8.0+

## Installing

Use Composer to install it:

```
composer require filippo-toso/openai
```

If you don't already have an implementation for psr/http-factory and psr/http-client, you should execute also:

```
composer require php-http/curl-client laminas/laminas-diactoros
```

## Vanilla PHP usage

Create the SDK instance and call the various endpoints.

```php
use FilippoToso\OpenAI\OpenAI;
use FilippoToso\OpenAI\Options;

require(__DIR__ . '/../vendor/autoload.php');

$options = new Options([
    'apiKey' => 'your-api-key', // @see https://platform.openai.com/account/api-keys
    'oprganizationId' => 'your-organization-id', // @see https://platform.openai.com/account/org-settings
]);

$openAi = new OpenAI($options);

$response = $openAi->models()->list();

print_r($response->body());
```

## Laravel usage

In your config/services.php files add:

```php
return [
    
    // ...
    
    'openai' => [
        'api_key' => env('OPENAI_API_KEY'),
        'organization_id' => env('OPENAI_ORGANIZATION_ID'),
    ],   
];
```

In your .env file, add the following variables:

```
OPENAI_API_KEY=your-api-key
OPENAI_ORGANIZATION_ID=your-organization-id
```

In your Laravel code:

```php
use FilippoToso\OpenAI\Laravel\OpenAI;

$response = OpenAI::models()->list();

dump($response->body());
```
