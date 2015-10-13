<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Pages */
Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/about', [
    'as' => 'about',
    'uses' => 'PagesController@about'
]);

Route::get('/imprint', [
    'as' => 'imprint',
    'uses' => 'PagesController@imprint'
]);

Route::get('/backend', [
    'as' => 'backend',
    'middleware' => 'auth',
    'uses' => 'PagesController@backend'
]);

/* Session */
get('/login', [
    'as' => 'login',
    'middleware' => 'guest',
    'uses' => 'SessionsController@create'
]);

post('/login', [
    'as' => 'login',
    'middleware' => 'guest',
    'uses' => 'SessionsController@store'
]);

get('/logout', [
    'as' => 'logout',
    'middleware' => 'auth',
    'uses' => 'SessionsController@destroy'
]);

/* User */
get('/user', [
    'as' => 'user',
    'uses' => 'UsersController@index'
]);

post('/user/create', [
    'as' => 'post.create.user',
    'middleware' => 'auth',
    'uses' => 'UsersController@store'
]);

delete('/user/{id}/delete', [
    'as' => 'delete.user',
    'middleware' => 'auth',
    'uses' => 'UsersController@destroy'
]);

/* Category */
get('backend/category/create', [
    'as' => 'get.create.category',
    'middleware' => 'auth',
    'uses' => 'CategoriesController@create'
]);

post('/category/create', [
    'as' => 'post.create.category',
    'middleware' => 'auth',
    'uses' => 'CategoriesController@store'
]);

post('category/{id}/edit', [
    'as' => 'edit.category',
    'middleware' => 'auth',
    'uses' => 'CategoriesController@update'
]);

get('/category/{id}', [
    'as' => 'get.category',
    'uses' => 'CategoriesController@show'
]);

delete('/category/{id}/delete', [
    'as' => 'delete.category',
    'middleware' => 'auth',
    'uses' => 'CategoriesController@destroy'
]);

/* Project */
get('/backend/project/create', [
    'as' => 'get.create.project',
    'middleware' => 'auth',
    'uses' => 'ProjectsController@create'
]);

post('/project/create', [
    'as' => 'post.create.project',
    'middleware' => 'auth',
    'uses' => 'ProjectsController@store'
]);

post('project/{id}/edit', [
    'as' => 'edit.project',
    'middleware' => 'auth',
    'uses' => 'ProjectsController@update'
]);

get('/project/{id}', [
    'as' => 'get.project',
    'uses' => 'ProjectsController@show'
]);

delete('/project/{id}/delete', [
    'as' => 'delete.project',
    'middleware' => 'auth',
    'uses' => 'ProjectsController@destroy'
]);

/* Images */
post('/image/create', [
    'as' => 'post.create.image',
    'middleware' => 'auth',
    'uses' => 'ImagesController@store'
]);

delete('/image/{id}/delete', [
    'as' => 'delete.image',
    'middleware' => 'auth',
    'uses' => 'ImagesController@destroy'
]);

/* Videos */
post('/video/create', [
    'as' => 'post.create.video',
    'middleware' => 'auth',
    'uses' => 'VideosController@store'
]);

delete('/video/{id}/delete', [
    'as' => 'delete.video',
    'middleware' => 'auth',
    'uses' => 'VideosController@destroy'
]);

/* Links */
post('/link/create', [
    'as' => 'post.create.link',
    'middleware' => 'auth',
    'uses' => 'LinksController@store'
]);

delete('/link/{id}/delete', [
    'as' => 'delete.link',
    'middleware' => 'auth',
    'uses' => 'LinksController@destroy'
]);

/* API */

get('/api/project/{id}', [
    'as' => 'api.project',
    'middleware' => 'auth',
    'uses' => 'ApiController@project'
]);

