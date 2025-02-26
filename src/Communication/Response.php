<?php

namespace TecnoSpeed\Plugnotas\Communication;

class Response
{
    public $body;
    public $statusCode;

    public static function parse($response, bool $jsonDecode = true)
    {
        $responseObject = new Response;

        $body = $response->getBody()->getContents();
        $responseObject->body = $jsonDecode ? \json_decode($body, true) : $body;
        $responseObject->statusCode = $response->getStatusCode();

        return $responseObject;
    }
}
