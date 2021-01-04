<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\CustomerContact;
use App\Http\Controllers\api\ProductsController;
use App\Http\Controllers\api\ProductImageController;
use App\Http\Controllers\api\SlideController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::namespace('Api')->group(function() {
    // Route::get('category',[CategoryController::class,'index'] );
    // Route::post('category',[CategoryController::class,'store'] );
    // Route::put('category',[CategoryController::class,'update'] );
    // Route::delete('category',[CategoryController::class,'destroy'] );
    //});
    
// Route::prefix('v1')->group(function(){
//     Route::apiResource('category', CategoryController::class);
// });

Route::apiResource('category', CategoryController::class);
Route::apiResource('customer',CustomerContact::class);
Route::apiResource('products',ProductsController::class);
Route::apiResource('product-image',ProductImageController::class);
Route::apiResource('slide',SlideController::class);


