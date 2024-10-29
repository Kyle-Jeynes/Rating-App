<?php

namespace App\Http\Controllers;

class Controller
{
    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (empty($csrf = app(\App\Request::class)->get('csrf_token'))) {
                throw new \Exception('CSRF Mismatch');
            }

            if ($csrf !== app(\App\Session::class)->get('csrf_token')) {
                throw new \Exception('CSRF Mismatch');
            }

            app(\App\Request::class)->remove('csrf_token');
        }
    }
}