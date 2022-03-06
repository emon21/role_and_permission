<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\Backend\RolesController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\SocialController;


Route::get('/', function () {
    return view('welcome');
});

//Backend Route
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [BackendController::class,'index'])->name('admin.dashboard');
   Route::resource('/roles',RolesController::class);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/{user}', [HomeController::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//socalite route

// Route::get('login/facebook', [SocialController::class,'facebookredirect']);
// Route::get('login/facebook/callback', [SocialController::class,'loginwithfacebook']);

// Route::get('login/github',[SocialController::class,'githubRedirect']);
// Route::get('login/github/callback',[SocialController::class,'loginWithGithub']);

Route::get('login/facebook',[SocialController::class,'facebookRedirect']);
Route::get('login/facebook/callback',[SocialController::class,'loginWithFacebook']);

Route::get('login/google',[SocialController::class,'googleRedirect']);
Route::get('login/google/callback',[SocialController::class,'loginWithGoogle']);

Route::get('login/github',[SocialController::class,'githubRedirect']);
Route::get('login/github/callback',[SocialController::class,'loginWithGithub']);


Route::get('login/linkdin',[SocialController::class,'linkdinRedirect']);
Route::get('login/linkdin/callback',[SocialController::class,'loginWithLinkdin']);
http://127.0.0.1:8000/login/facebook/callback
