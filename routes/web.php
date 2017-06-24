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

use App\Article;

Route::get('/', function() {
    return view('coming-soon');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('news/{slug}', ['as' => 'article', function($slug) {
    return view('news.show', ['article' => Article::findBySlugOrFail($slug) ]);
}]);

Route::get('news', ['as' => 'news', function() {
    return view('news.index', ['articles' => Article::listing()->paginate(12) ]);
}]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
