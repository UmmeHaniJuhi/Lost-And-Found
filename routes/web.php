<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\globalController;

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

/*
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/form', function () {
    return view('successValidation');
})->name('loadSuccessForm');


Route::get('/login', function () {
    return view('logIn');
})->middleware('loginAuth')->name('logIn');

Route::get('/logout', function () {
        session()->pull('user');
        return redirect()->route('home');
})->name('logOut');


Route::get('/register', function () {
    return view('register');
})->name('register');
*/

//forms 
Route::post('/form', [formController::class, 'formLoad'])->name("loadForm");
Route::post('/search', [formController::class, 'searchItem'])->name("search");

//test
Route::get('/dashboard/{apple}/{apple2}/{apple3}', [formController::class, 'getApple'])->name("appleRoute");

//global
Route::get('/', [globalController::class, 'load_homePage'])->name("homePage");
Route::get('/search_results', [globalController::class, 'load_searchResults'])->name("searchResults");
Route::get('/view_posts', [globalController::class, 'load_viewPosts'])->name("viewPosts");

//user
Route::get('/create_post', [userController::class, 'load_createPost'])->name("createPost_UI");
Route::get('/user_dashboard', [userController::class, 'load_userDashboard'])->name("user_Dashboard");

//admin
Route::get('/admin_dashboard', [adminController::class, 'load_adminDashboard'])->name("admin_Dashboard");

//footer
Route::get('/about', [globalController::class, 'load_aboutUs'])->name("load_aboutUs");
Route::get('/contact', [globalController::class, 'load_contactUs'])->name("contactUs");
Route::get('/privacy-policy', [globalController::class, 'load_privacyPolicy'])->name("privacyPolicy");
Route::get('/contact', [globalController::class, 'load_contactUs'])->name("contactUs");
Route::get('/toc', [globalController::class, 'load_toc'])->name("toc");




