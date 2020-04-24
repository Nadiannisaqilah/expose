<?php

use GuzzleHttp\Psr7\Response;
use function GuzzleHttp\Psr7\str;

function expose_view_path(string $path = '')
{
    return base_path('resources/views/' . $path);
}

function respond_json($responseData, int $statusCode = 200)
{
    return str(new Response(
        $statusCode,
        ['Content-Type' => 'application/json'],
        json_encode($responseData)
    ));
}

function respond_html(string $html, int $statusCode = 200)
{
    return str(new Response(
        $statusCode,
        ['Content-Type' => 'text/html'],
        $html
    ));
}
