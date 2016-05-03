<?php

require "vendor/autoload.php";

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\App;

$app = new App();

$app->get("/", function (Request $request, Response $response) {
    $response->getBody()->write("hello world");

    return $response;
});

$app->run();
