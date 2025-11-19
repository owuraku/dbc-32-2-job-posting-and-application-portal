<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return "This is the homepage";
});

Route::get('/users', [FirstController::class, 'index']);

Route::get('/users/{id}/{name}/{age}', function (string $id, string $name, int $age) {
    return "User with id $id and name $name and age $age";
});
