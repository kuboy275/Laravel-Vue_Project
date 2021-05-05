<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\ProductsController;
use App\Http\Controllers\api\ProductImageController;
use App\Http\Controllers\api\SlideController;
use App\Http\Controllers\api\LinksController;
use App\Http\Controllers\api\TagsController;
use App\Http\Controllers\api\ProductsTagController;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\CommentBlogController;
use App\Http\Controllers\api\OrderController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// LOCATION
Route::get('links',[LinksController::class,'index']);
Route::get('tags',[ TagsController::class,'index']);
Route::resource('order', OrderController::class);

// SHOP
Route::group(['prefix' => 'products'], function () {
    
    Route::resource('index',ProductsController::class);
    Route::resource('images',ProductImageController::class)->only(['index','show']);
    Route::get('tags', [ProductsTagController::class,'index']);
    Route::get('latest', [ProductsController::class,'latest']);
    Route::get('category', [CategoryController::class , 'index']);
    Route::get('search',[ProductsController::class,'search']);
    
});
//  BLOG
Route::resource('posts', PostController::class)->only(['index','show']);
Route::resource('comment' , CommentBlogController::class)->only(['store','show']);
Route::get('slider',[SlideController::class,'index']);

//  AUTH
Route::group(['prefix' => 'auth'], function () {
    Route::post('register' , [AuthController::class,'register']);
    Route::post('login' , [AuthController::class,'login']);
});
