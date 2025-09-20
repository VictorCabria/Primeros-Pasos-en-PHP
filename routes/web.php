<?php

require __DIR__ . '/../app/Controllers/HomeController.php';
require __DIR__ . '/../app/Controllers/PostController.php';
require __DIR__ . '/../app/Controllers/AboutController.php';
require __DIR__ . '/../app/Controllers/LinksController.php';

$router->get('/', [HomeController::class, 'index']);
$router->get('/post', [PostController::class, 'show']);
$router->get('/about', [AboutController::class, 'index']);
$router->get('/links', [LinksController::class, 'index']);
$router->get('/links/create', [LinksController::class, 'create']);
$router->post('/links/store', [LinksController::class, 'store']);
$router->delete('/links/delete', [HomeController::class, 'destroy']);

?>