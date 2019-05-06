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

$router->get('/products', function () use ($router) {
    // return products
    return "products";
});

$router->get('/products/{id}', function ($id) use ($router) {
    // return specific product + detailed info (reviews and what stores that have it)
    return "specific product $id";
});


$router->post('/products', function () use ($router) {
    // create product 
    return "add product";
});

$router->get('/stores', function () use ($router) {
    // return stores
    return "stores";
});

$router->get('/reviews', function () use ($router) {
    // return reviews
    return "stores";
});