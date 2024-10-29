<?php

namespace App;

use App\Enum\RequestType;

class Request
{
    private array $source = [];

    public function __construct()
    {
        $requestType = RequestType::tryFrom($_SERVER['REQUEST_METHOD']);
        
        if (is_null($requestType)) {
            throw new \Exception('Request type is not supported.');
        }

        $this->source = $requestType->source();
    }

    public function get(string $index, mixed $default = null): mixed
    {
        return $this->source[$index] ?? $default;
    }

    public function set(string $index, mixed $value): void
    {
        $this->source[$index] = $value;
    }

    public function toArray(): array
    {
        return $this->source;
    }

    public function remove(string $index): void
    {
        unset($this->source[$index]);
    }
}