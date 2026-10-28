<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome', [
//         'greeting' => 'hello gemb',
//         'jobs' => Job::all(),
//     ]);
// });
// job controler


Route::controller(JobController::class)->group(
    function () {
        Route::get('/job/{id}/edit', 'edit');
        Route::patch('/job/{id}', 'update');
        Route::get('/job/{id}', 'show');
        Route::get('/jobs', 'index');
        Route::post('/jobs', 'store');
        Route::delete('/jobs/{id}', 'destroy');
        Route::get('/jobs/create', 'create');
    }
);

// Route::resource('jobs', JobController::class)->except([
//     'create', 'edit', 'show' ,'index' 
// ]);

// Route::get('/greet/{name}', function ($name) {
//     return 'Hello, ' . $name;
// });
Route::view('/greet/{name}', 'greet');
Route::view('/', 'home');
Route::view(
    '/welcome',
    'welcome',
    ['greeting' => 'hello gemb']
);

