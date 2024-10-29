<?php

namespace App\Http\Controllers;

use App\Request;
use App\Services\ISubmissionService;

class SubmissionController extends Controller
{
    public function store(): void
    {
        $request = app(Request::class)->toArray();

        if (!app(ISubmissionService::class)->store($request)) {
            die(json_encode(['status' => false]));
        }

        die(json_encode(['status' => true]));
    }
}