<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/usuarios', 'UsuarioController@mostrarTodosUsuarios');
$router->get('/usuario/{id}', 'UsuarioController@mostrarUmUsuario');

$router->post('/usuario/cadastrar', 'UsuarioController@cadastrarUsuario');

$router->put('/usuario/{id}/atualizar', 'UsuarioController@atualizarUsuario');

$router->delete('/usuario/{id}/deletar', 'UsuarioController@deletarUsuario');