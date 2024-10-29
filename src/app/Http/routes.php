<?php

use AltoRouter as Router;

app(Router::class)->map('GET', '/', [App\Http\Controllers\ViewController::class, 'index']);
app(Router::class)->map('POST', '/submit', [App\Http\Controllers\SubmissionController::class, 'store']);