<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MongoController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/mongo-search', [MongoController::class, 'searchMovie']);
Route::post('/mongo-search', [MongoController::class, 'searchMovieAjax']);



