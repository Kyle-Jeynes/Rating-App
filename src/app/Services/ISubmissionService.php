<?php

namespace App\Services;

interface ISubmissionService
{
    public function store(array $data): bool;
}