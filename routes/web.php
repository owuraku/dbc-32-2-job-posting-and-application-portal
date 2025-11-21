<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return "This is the homepage";
});

// Route::get('/users', [FirstController::class, 'index']);
Route::get('/users', [FirstController::class, 'showAllUsers']);
Route::get('/getUser/{id}', [FirstController::class, 'showOneUser']);


Route::get('/users/{id}/{name}/{age}', function (string $id, string $name, int $age) {
    return "User with id $id and name $name and age $age";
});


// Route::get('/cars', [FirstController::class, 'index']);
// Route::post('/cars', [FirstController::class, 'index']);
// Route::patch('/cars/{car}', [FirstController::class, 'index']);
// Route::delete('/cars/{car}', [FirstController::class, 'index']);

Route::resource('/cars', CarController::class);
Route::resource('/students', StudentController::class);
Route::resource('/companies', CompanyController::class);


// Route::get('/cars/rent', [FirstController::class, 'index']);
