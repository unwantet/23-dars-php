<?php

require_once '../core/Router.php';
require_once '../core/Controller.php';
require_once '../config/database.php';
require_once '../app/Controllers/PostController.php';
require_once '../app/Controllers/UserController.php'; 

$router = new Router();
$router->get('/users/register', 'UserController@register');
$router->get('/users/login', 'UserController@login');
$router->post('/users/handleRegister', 'UserController@handleRegister');
$router->post('/users/handleLogin', 'UserController@handleLogin');

$router->get('/login', 'UserController@login');
$router->get('/', 'UserController@index');

$router->get('/posts/post', 'PostController@index');
$router->get('/posts/create', 'PostController@create');
$router->post('/posts/store', 'PostController@store');
$router->get('/posts/show', 'PostController@show');
$router->get('/posts/edit', 'PostController@edit');
$router->post('/posts/update', 'PostController@update');
$router->get('/posts/delete', 'PostController@destroy');

$router->dispatch();
