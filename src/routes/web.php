<?php

use Illuminate\Support\Facades\Route;
use Social\Logins\Http\Controllers\GoogleLoginController;
use Social\Logins\Http\Controllers\FacebookController;
use Social\Logins\Http\Controllers\LinkedinController;

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



Route::get('/social/login', function () {
    return view('logins::social-login');
});
Route::get('/welcome', function () {
    return view('logins::welcome');
});

Route::get('/login/google', [GoogleLoginController::class, 'redirectToGoogle']);
Route::get('/google/login/callback', [GoogleLoginController::class, 'handleGoogleCallback']);

Route::get('/login/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('/facebook/login/callback', [FacebookController::class, 'handleFacebookCallback']);

Route::get('/login/linkedin', [LinkedinController::class, 'redirectToLinkedin']);
Route::get('/linkedin/login/callback', [LinkedinController::class, 'handleLinkedinCallback']);
