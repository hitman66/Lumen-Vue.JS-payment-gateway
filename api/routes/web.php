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
    //return $router->app->version();
    return $router->app->make('view')->make('test');
});


// API route group
$router->group(['prefix' => 'api'], function () use ($router) {

    //checking out the login calls
    $router->post('login', ['middleware' => 'cors', 'uses' => 'AuthController@login']);

    //registering the order input
    $router->post('reg_order', ['middleware' => 'cors', 'uses' => 'Cus_OrderController@reg_order']); 

    //get one user by id
    $router->get('order/{id}', ['middleware' => 'cors', 'uses' => 'Cus_OrderController@showOneRegOrder']);    

    //get the current user properties
    $router->get('me', ['middleware' => 'cors', 'uses' => 'AuthController@me']);



});
