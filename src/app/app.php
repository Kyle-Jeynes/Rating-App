<?php

namespace App;

use Exception;

class App
{
    use Traits\Singleton;

    private function __construct(private array $factory = [])
    {
        
    }

    public function get(string $index): mixed
    {
        if (!empty($dependency = $this->factory[$index] ?? null)) {
            return $dependency;
        }

        if (class_exists($index)) {
            return ($this->factory[$index] = new $index);
        }

        throw new Exception(sprintf('%s does not exist in the service container', $index));
    }

    public function set(string $index, mixed $value): void
    {
        $this->factory[$index] = $value;
    }
}