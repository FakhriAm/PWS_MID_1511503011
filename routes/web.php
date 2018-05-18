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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1',function ($api){

    $api->get('/',function (){
      throw new
      Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException([],"Method Not Allowed");
    });

   $api->get('categories','App\Http\Controllers\CategoryController@showAllCategory');
   $api->get('categories/{id}','App\Http\Controllers\CategoryController@showOneCategory');
   $api->post('categories','App\Http\Controllers\CategoryController@create');
   $api->put('categories/{id}','App\Http\Controllers\CategoryController@update');
   $api->delete('categories/{id}','App\Http\Controllers\CategoryController@delete');


   $api->get('books','App\Http\Controllers\BookController@showAllBook');
   $api->get('books/{id}','App\Http\Controllers\BookController@showOneBook');
   $api->post('books','App\Http\Controllers\BookController@create');
   $api->put('books/{id}','App\Http\Controllers\BookController@update');
   $api->delete('books/{id}','App\Http\Controllers\BookController@delete');

});

