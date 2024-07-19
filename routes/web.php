<?php

use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

// Untuk menampilkan halaman
Route::get('/', function () {
    return view('login');
})->name('index');
Route::get('login', function () {
    return view('login');
})->name('login');
Route::post('login/action', [SocialiteController::class, 'auth_login']);

Route::get('register', function () {
    return view('register');
})->name('register');
Route::post('register/action', [SocialiteController::class, 'save_register'])->name('register.action');

// Untuk redirect ke Google
Route::get('login/google/redirect', [SocialiteController::class, 'redirect'])
    ->middleware(['guest'])
    ->name('redirect');

// Untuk callback dari Google
Route::get('login/google/callback', [SocialiteController::class, 'callback'])
    ->middleware(['guest'])
    ->name('callback');

// Untuk logout
Route::post('logout', [SocialiteController::class, 'logout'])
    ->middleware(['auth'])
    ->name('logout');

Route::get('apps', function (){
    return view('apps/main');
});


Route::get('apps/articles', 'ArticleController@index')->name('articles');
Route::get('apps/videos', 'VideoController@index')->name('videos');

Route::get('shutdown', 'SocialiteController@shutdown')->name('shutdown');
