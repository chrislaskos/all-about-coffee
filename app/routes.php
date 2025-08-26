<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Views\PhpRenderer;

return function (App $app) {
    $app->get('/', function (Request $request, Response $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../templates', ['title' => 'All About Coffee']);
        $renderer->setLayout('layout.php');
        
        return $renderer->render($response, 'home.php');
    })->setName('home');

    $app->get('/brewing', function (Request $request, Response $response, $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../templates', ['title' => 'Coffee Brewing']);
        $renderer->setLayout('layout.php');

        return $renderer->render($response, 'brewing.php');
    })->setName('brewing');
};