<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/corretor/{id}', 'HomeController@index');
$router->post('/editar/{id}', 'CorretorController@edit');


$router->get('/excluir/{id}', 'CorretorController@delete');
$router->post('/add', 'CorretorController@add');