<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Views\PhpRenderer;

return function (App $app) {
    $app->get('/', function (Request $request, Response $response, array $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../templates', ['title' => 'All About Coffee']);
        $renderer->setLayout('layout.php');
        
        return $renderer->render($response, 'home.php');
    })->setName('home');

    $app->get('/brewing', function (Request $request, Response $response, array $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../templates', ['title' => 'Coffee Brewing']);
        $renderer->setLayout('layout.php');

        return $renderer->render($response, 'brewing.php');
    })->setName('brewing');

    $app->get('/grinding', function (Request $request, Response $response, array $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../templates', ['title' => 'Coffee Grinding']);
        $renderer->setLayout('layout.php');

        return $renderer->render($response, 'grinding.php');
    })->setName('grinding');

    $app->get('/roasting', function (Request $request, Response $response, array $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../templates', ['title' => 'Coffee Roasting']);
        $renderer->setLayout('layout.php');

        return $renderer->render($response, 'roasting.php');
    })->setName('roasting');

    $app->get('/survey', function (Request $request, Response $response, array $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../templates', ['title' => 'Coffee Survey']);
        $renderer->setLayout('layout.php');

        return $renderer->render($response, 'survey.php');
    })->setName('survey');

    $app->post('/survey', function (Request $request, Response $response, array $args) {
        var_dump($request);

        die('Form submitted');
    });

    $app->get('/drinks', function (Request $request, Response $response, array $args) {
        $renderer = new PhpRenderer(__DIR__ . '/../templates', ['title' => 'Coffee Drinks']);
        $renderer->setLayout('layout.php');

        return $renderer->render($response, 'drinks.php');
    })->setName('drinks');
};