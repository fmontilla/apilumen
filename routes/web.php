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

$router->group(['prefix', '/', 'middleware' => App\Http\Middleware\VersionControl::class], function ($router) {
    $router->post('/auth', 'V{d}\AuthController@post');
    $router->put('/auth', 'V{d}\AuthController@put');

    $router->post('/user', 'V{d}\UserController@post');

    $router->group(['middleware' => ['auth:api', 'jwt.refresh']], function () use ($router) {
        $router->delete('/auth', 'V{d}\AuthController@delete');
        $router->get('/auth', 'V{d}\AuthController@get');

        $router->get('/products', 'V{d}\ProductController@query');
        $router->get('/brands', 'V{d}\BrandController@getAll');

        $router->put('/user/{id}', 'V{d}\UserController@put');
    });
});
