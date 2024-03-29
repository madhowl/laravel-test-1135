<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\IndexController::class,'index'])->name('home');
Route::get('/posts',[\App\Http\Controllers\IndexController::class,'index'])->name('posts');
Route::get('/post/{id}',[\App\Http\Controllers\IndexController::class,'singlePost'])->name('post');

Route::middleware("auth:web")->group(function () {
    Route::get('/logout',
        [\App\Http\Controllers\AuthController::class, 'logout']
    )->name('logout');
    Route::post('comments', [\App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
});

Route::middleware("guest:web")->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

    Route::get('/forgot', [\App\Http\Controllers\AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/forgot_process', [\App\Http\Controllers\AuthController::class, 'forgot'])->name('forgot_process');
});

Route::get('/sub', [\App\Http\Controllers\IndexController::class, 'lastPosts'])->name('last_posts');

Route::resource('/res',\App\Http\Controllers\PostController::class);
Route::prefix('parse')->group(function (){
    Route::get('string',[\App\Http\Controllers\ParseHtmlController::class,'parseFromString']);
    Route::get('url',[\App\Http\Controllers\ParseHtmlController::class,'parseFromUrl']);

});


Route::get('/contacts', [\App\Http\Controllers\IndexController::class, 'showContactForm'])->name('contacts');
Route::post('/contact_form_process', [\App\Http\Controllers\IndexController::class, 'contactForm'])->name('contact_form_process');
