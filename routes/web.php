<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CompanyController;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobPostingController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;

Route::get('/', [HomeController::class, 'homepage']);

// Route::get('/email', function () {
//     $mail = new WelcomeEmail('Owura', 'https://gi-kace.gov.gh');
//     Mail::to('seth.gyekye-boateng@gi-kace.gov.gh')->send($mail);
//     return ['message' => 'Message sent successfully'];
// });


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

// print(name: 'The', age: 20)

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('/cars', CarController::class);
    Route::resource('/students', StudentController::class);
    Route::resource('/companies', CompanyController::class);
    Route::resource('/job-postings', JobPostingController::class);
    Route::resource('/job-applications', JobApplicationController::class);
    Route::resource('/users', UserController::class);
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // Route::resource(controller: JobApplicationController::class, name: '/job-applications');
});


Route::prefix('/auth')->name('auth.')->controller(AuthController::class)->middleware('guest')->group(
    function () {
        Route::get('login', 'loginPage')->name('login.page');
        Route::get('register', 'registrationPage')->name('register.page');
        Route::get('verify-email/{email}/{hash}', 'verifyEmail')->name('verify.email');


        Route::post('register', 'register')->name('register');
        Route::post('login', 'login')->name('login');
        Route::post('logout', 'logout')->name('logout')->withoutMiddleware('guest');
    }
);



// Route::get('/cars/rent', [FirstController::class, 'index']);
