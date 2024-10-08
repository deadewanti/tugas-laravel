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
Route::get("/create2", [HomeController::class, "store2"]);
Route::get("/create3", [HomeController::class, "store3"]);
Route::get("/create4", [HomeController::class, "store4"]);



Route::get("/show",[HomeController::class,"show"]);
Route::get('/products/{id}/edit', [HomeController::class,'edit']);
Route::put('/products/{id}', [HomeController::class,'update']);
Route::delete('/products/{id}', [HomeController::class,'destroy']);