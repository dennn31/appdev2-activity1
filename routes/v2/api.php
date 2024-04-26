<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', function () {
    return 'Hello World! in v2';
});

Route::post('/register', function () {
	return 'New resource created!';
});

Route::put('/update/{id}', function ($id) {
	return "Resource with ID $id updated!";
});

Route::patch('/modify/{id}', function ($id) {
	return "Resource with ID $id modified!";
});

Route::delete('/delete/{id}', function ($id) {
	return "Resource with ID $id deleted!";
});