<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

use Slim\Views\PhpRenderer;


return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });

    $app->get('/bye', function (Request $request, Response $response) {
        $response->getBody()->write($request->getMethod());
        return $response;
    });

    //Examples with views.
    $app->get('/temp', function (Request $request, Response $response, array $args) {
        //Construct the view
        $phpView = new PhpRenderer("../src/templates");
        $response = $phpView->render($response, "hello.html", []);
        return $response;
    });

    $app->get('/param', function (Request $request, Response $response, array $args) {
        $data = ["test" => "Test string"];
        //Construct the view
        $phpView = new PhpRenderer("../src/templates");
        $response = $phpView->render($response, "test.php", $data);
        return $response;
    });

    $app->post('/post', function (Request $request, Response $response, array $args) {
        $data = ["data" => $request->getParsedBody()];
        //Construct the view
        $phpView = new PhpRenderer("../src/templates");
        $response = $phpView->render($response, "test.php", $data);
        return $response;
    });
};
