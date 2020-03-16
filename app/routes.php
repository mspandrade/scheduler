<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;  
use Slim\Views\PhpRenderer;

$container->view = new PhpRenderer("../public/");

return function (App $app) {
    $app->get('/', function (Request $request, Response $response) {
       
        
        return $this->view->render($response, 'index.html');
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
