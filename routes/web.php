<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello World!',
        'my-second-post' => 'test'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});
*/

Route::get('/', function() {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about',[
        'articles' =>App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');

// GET /articles
// GET /articles/:id
// GET /articles/create
// POST /articles
// GET /articles/:id/edit
// PUT /articles/:id/
// DELETE /articles/:id/