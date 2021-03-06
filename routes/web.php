<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@getHomePage');
Route::middleware(['cors'])->group(function () {
    Route::get('/atualizarFeed', 'RssController@rssLoader');
});
Route::get('/listarPodcasts', 'RssController@getPodcastFile');
Route::get('/selecionarPodcast/{podcastName}', 'RssController@selectPodcast');