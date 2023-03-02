<?php

namespace FilippoToso\OpenAI\Endpoints;

use FilippoToso\Api\Sdk\Endpoint as BaseEndpoint;
use ReflectionMethod;

class Endpoint extends BaseEndpoint
{
    /**
     * Automagically create payload from method parameters
     *
     * @param string    $method     class method name
     * @param array     $args       method arguments
     * @param array     $exclude    arguments to exclude
     * @param boolean   $json       encode the payload
     * @return array|string
     */
    protected function payload(string $method, array $args, $exclude = [], $json = true): array|string
    {
        $method = new ReflectionMethod($method);

        $payload = [];

        foreach ($method->getParameters() as $index => $parameter) {

            $name = $parameter->getName();

            if (!array_key_exists($index, $args) || in_array($name, $exclude) || ($parameter->isOptional() && ($parameter->getDefaultValue() == $args[$index]))) {
                continue;
            }

            $payload[$name] = $args[$index];
        }

        $payload = array_filter($payload);

        return $json ? json_encode($payload) : $payload;
    }
}
