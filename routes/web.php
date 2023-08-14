<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('UserPage/LandingPage/index');
});

Route::get('/about', function () {
    return view('UserPage/LandingPage/about');
});

Route::get('/admin', function () {
    return view('AdminPage/admin');
});

Route::get('/login', function () {
    return view('AdminPage/login');
});

Route::get('/form-demo', function () {
    return view('UserPage/LandingPage/formdemo');
});
