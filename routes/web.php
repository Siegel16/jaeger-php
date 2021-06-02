<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    return 12;
});

$router->group(['as' => 'product'], function() use ($router) {
    $router->get('/', ['as' => 'index', 'uses' => 'ExampleController@index']);

    $router->get('/create', ['as' => 'create', 'uses' => 'ExampleController@create']);

    $router->post('/store', ['as' => 'store', 'uses' => 'ExampleController@store']);

    $router->get('/edit/{id}', ['as' => 'edit', 'uses' => 'ExampleController@edit']);

    $router->post('/update/{id}', ['as' => 'update', 'uses' => 'ExampleController@update']);

    $router->post('/delete/{id}', ['as' => 'destroy', 'uses' => 'ExampleController@delete']);
});
