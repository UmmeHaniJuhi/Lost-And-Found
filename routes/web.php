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



//forms 
Route::post('/form', [formController::class, 'formLoad'])->name("loadForm");




//global
Route::get('/', [globalController::class, 'load_homePage'])->name("homePage");
// Route::get('/home', [globalController::class, 'load_homePage'])->name("homePage");
Route::get('/search_results', [globalController::class, 'load_searchResults'])->name("searchResults");
Route::get('/view_posts/{id}', [globalController::class, 'load_viewPosts'])->name("viewPosts");
Route::get('/report_a_post/{id}', [globalController::class, 'report_a_post'])->name("viewPosts");
Route::get('/login', [globalController::class, 'load_login'])->middleware('loginAuth')->name("loadLogin");
Route::post('/login', [globalController::class, 'login'])->name("login");
Route::get('/register', [globalController::class, 'load_register'])->name("loadregister");
Route::post('/register', [globalController::class, 'register'])->name("register");
Route::post('/search', [globalController::class, 'load_searchResults'])->name("search");
Route::post('/createContactUs', [globalController::class, 'createContactUs'])->name("createContactUs");


//user
Route::get('/create_post/{type}', [userController::class, 'load_createPost'])->name("createPost_UI");
Route::get('/user_dashboard', [userController::class, 'load_userDashboard'])->name("user_Dashboard");
Route::get('/logout', [userController::class, 'logout'])->name("logout");
Route::post('/create_post', [userController::class, 'create_post'])->name("create_post");
Route::get('/found/{id}', [userController::class, 'found'])->name("found");
Route::get('/edit/{id}', [userController::class, 'edit'])->name("edit");
Route::get('/delete/{id}', [userController::class, 'delete'])->name("delete");
Route::post('/edit_post', [userController::class, 'editPost'])->name("edit_post");

//admin
Route::get('/admin_posts_dashboard', [adminController::class, 'posts_dashboard'])->name("posts_dashboard");
Route::get('/admin_messages_dashboard', [adminController::class, 'load_messages'])->name("load_messages");
Route::get('/archive_post/{id}', [adminController::class, 'archive_post'])->name("archive_post");
Route::get('/activate_post/{id}', [adminController::class, 'activate_post'])->name("activate_post");
Route::get('/make_urgent/{id}', [adminController::class, 'make_urgent'])->name("make_urgent");
Route::get('/revoke_urgency/{id}', [adminController::class, 'revoke_urgency'])->name("revoke_urgency");
Route::get('/usage_report', [adminController::class, 'usage_report'])->name("usage_report");
// Route::get('/read_message/{id}', [adminController::class, 'read_message'])->name("read_message");

//footer
Route::get('/about', [globalController::class, 'load_aboutUs'])->name("load_aboutUs");
Route::get('/contact', [globalController::class, 'load_contactUs'])->name("contactUs");
Route::get('/privacy-policy', [globalController::class, 'load_privacyPolicy'])->name("privacyPolicy");
Route::get('/toc', [globalController::class, 'load_toc'])->name("toc");



Route::get('/test', [globalController::class, 'test']);
Route::get('/unauthorized', [globalController::class, 'unauthorized'])->name('unauthorized');
