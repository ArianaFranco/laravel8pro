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

Route::get('/', function () {
    return view('welcome');
});

//Using views with components
Route::resource('products',\App\Http\Controllers\ProductController::class);

//HTTP Client
Route::get('/posts', [\App\Http\Controllers\HTTPClientController::class, 'getAllPosts'])->name('client.getAllPosts')->middleware('checkUser');
Route::get('/posts/{id}', [\App\Http\Controllers\HTTPClientController::class, 'getPostById'])->name('client.getPostById');
Route::get('/add-post', [\App\Http\Controllers\HTTPClientController::class, 'addPost'])->name('client.addPost');
Route::get('/update-post/{id}', [\App\Http\Controllers\HTTPClientController::class, 'updatePost'])->name('client.updatePost');
Route::get('/delete-post/{id}', [\App\Http\Controllers\HTTPClientController::class, 'deletePost'])->name('client.deletePost');

Route::get('fluent-string', [\App\Http\Controllers\FluentController::class, 'index'])->name('fluent.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

