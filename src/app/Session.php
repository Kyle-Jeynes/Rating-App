<?php

namespace App;

class Session
{
    public function get(string $index, mixed $default = null): mixed
    {
        return $_SESSION[$index] ?? $default;
    }

    public function set(string $index, mixed $value): void
    {
        $_SESSION[$index] = $value;
    }
}