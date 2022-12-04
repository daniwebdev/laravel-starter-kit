<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Core\ArticleCategoryController;
use App\Http\Controllers\Core\ArticleController;
use App\Http\Controllers\Core\RoleController;
use App\Http\Controllers\Core\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('auth')->group(function() {

    Route::get('/logout', [LoginController::class, 'logout']);

    /* General */
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');


    /* User Management */
    Route::any('user/ajax/{param}', [UserController::class, 'ajax'])->name('user.ajax');
    Route::resource('user', UserController::class);

    /* Role Management */
    Route::any('role/ajax/{param}', [RoleController::class, 'ajax'])->name('role.ajax');
    Route::resource('role', RoleController::class);

    /* Article Routes */
    Route::any('article/ajax/{param}', [ArticleController::class, 'ajax'])->name('role.ajax');
    Route::resource('article', ArticleController::class);
    /* ArticleCategory Routes */
    Route::any('article-category/ajax/{param}', [ArticleCategoryController::class, 'ajax'])->name('role.ajax');
    Route::resource('article-category', ArticleCategoryController::class);

});
