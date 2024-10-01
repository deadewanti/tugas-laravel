<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/form', function () {
    return view('form');
});
Route::post('/submit', [HomeController::class, 'form']);

Route::get("/create",[HomeController::class, "store"]);

Route::get("/show",[HomeController::class,"show"]);