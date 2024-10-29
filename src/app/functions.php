<?php

use App\App as App;

function app(?string $index = null): mixed
{
    return !is_null($index) ? App::getInstance()->get($index) : App::getInstance();
}

function view(string $template, array $data = [])
{
    foreach($data as $attribute => $value) {
        app(Smarty\Smarty::class)->assign($attribute, $value);
    }
    
    app(Smarty\Smarty::class)->display(sprintf('%s.tpl', $template));
}

function session(?string $index = null, mixed $default = null): mixed
{
    if (!empty($index)) {
        return app(App\Session::class)->get($index, $default);
    }

    return app(App\Session::class);
}

function csrf_token(): string
{
    return session('csrf_token');
}