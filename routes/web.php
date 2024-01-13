<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserScoreController;


$router->get('/', function () use ($router) {
    return $router->app->version();
});

Route::get('/history', 'HistoryController@index');

//Route::get('/scores', [UserScoreController::class, 'index']);

//Route::get('/history', [HistoryController::class, 'index']);