<?php

require_once __DIR__.'/../app/config/bootstrap.php';

$app->get('/{route}', function (\Symfony\Component\HttpFoundation\Request $request, $route) use ($app) {
    $route = explode('/', $route);

    $controller = (!empty($route[0])) ? $route[0] : 'dashboard';
    $controller = ucfirst($controller);
    unset($route[0]);

    $method = (!empty($route[1])) ? $route[1] : 'index';
    unset($route[1]);

    $variables = $route;

    $controller = 'Griff\\'.$controller."_Controller";
    $controller = new $controller($request, $app, ...$variables);

    return $controller->$method();
})->assert('route', '(?:.*?\/*)*');

$app->run();
