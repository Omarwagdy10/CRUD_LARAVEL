<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/", [UserController::class,"welcom_index"])->name('welcom');
//<!--==========================For Users===========================================  -->


Route::get('/users',[UserController::class,'index_user'])->name('user.index');
Route::get('/users/create',[UserController::class,'create_user'])->name('user.create');
Route::post('/users',[UserController::class,'store_user'])->name('users.store');


//<!--========================For posts=============================================  -->
//to show all product
Route::get('/posts',[UserController::class,'index'])->name('post.index');
//to go to the form which create product
Route::get('/posts/create',[UserController::class,'create'])->name('post.create');
//to save product data in the data base
Route::post('/post',[UserController::class,'store'])->name('post.store');
//to show the product details
Route::get('/posts/{id}',[UserController::class,'show'])->name('posts.show');
