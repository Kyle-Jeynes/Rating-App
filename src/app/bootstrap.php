<?php

use App\App as App;
use AltoRouter as Router;
use Smarty\Smarty as Template;
use App\Session;
use App\Services\{ISubmissionService,SubmissionService};

app()->set(Router::class, new Router());
app()->set(Template::class, new Template());
app()->set(ISubmissionService::class, new SubmissionService());

app(Template::class)->setTemplateDir(__DIR__ . '/../app/views');
app(Template::class)->setConfigDir(__DIR__ . '/../storage/config');
app(Template::class)->setCompileDir(__DIR__ . '/../storage/compile');
app(Template::class)->setCacheDir(__DIR__ . '/../storage/cache');
app(Template::class)->setEscapeHtml(true);

if (empty(app(Session::class)->get('csrf_token'))) {
    app(Session::class)->set('csrf_token', bin2hex(random_bytes(32)));
}

app(Template::class)->assign('csrf_token', app(Session::class)->get('csrf_token'));