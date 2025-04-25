<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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


// Routes admin
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/',[HomeController::class,'homepage'])->name('homepage');
Route::get('/post',[AdminController::class,'post'])->name('post');
Route::post('/add-post',[AdminController::class,'addPost'])->name('post.create');
Route::get('/list-post',[AdminController::class,'listPost'])->name('post.list');
Route::get('/edit-post/{id}',[AdminController::class,'editPost'])->name('post.edit');
Route::put('/handle-update-post/{id}',[AdminController::class,'updatePost'])->name('post.update');
Route::delete('/delete-post/{id}',[AdminController::class,'deletePost'])->name('post.delete');

// Route front side
Route::get('/detail-post/{id}',[HomeController::class,'detailPost'])->name('post.detail');
Route::get('/user-add-post',[HomeController::class,'userAddPost'])->name('user.post.add');
Route::post('/handle-user-add-post',[HomeController::class,'handleAddPost'])->name('user.post.store');