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

use Illuminate\Support\Facades\Route;

// Auth routes
$router->group(['prefix' => 'auth'], function () use ($router) {
    $router->post('login', 'AuthController@login');
    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
    $router->post('me', 'AuthController@me');
});

// User routes
//$router->group([], function () use ($router) {
//    $router->get('users', 'UserController@index');
//    $router->get('users/{id}', 'UserController@show');
//    $router->post('users', 'UserController@store');
//    $router->put('users/{id}', 'UserController@update');
//    $router->delete('users/{id}', 'UserController@destroy');
//});
