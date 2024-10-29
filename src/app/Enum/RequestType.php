<?php

namespace App\Enum;

enum RequestType: string
{
    CASE GET = 'GET';
    CASE POST = 'POST';

    function source(): array
    {
        return match($_SERVER['CONTENT_TYPE'] ?? null) {
            'application/json' => json_decode(file_get_contents('php://input'), true),
            default => match ($this) {
                RequestType::GET => $_GET,
                RequestType::POST => $_POST,
            },
        };
    }
}