<?php

use Illuminate\Support\Facades\Route;




Route::get('/home',[
    'as' => 'home',
    'uses'=>'App\Http\Controllers\AdminHomeController@index'
]);

// START ROUTE ADMIN

Route::prefix('admin')->group(function () {

    // START ROUTE LOGIN

    Route::get('/', [
        'as' => 'admin.login',
        'uses' => 'App\Http\Controllers\AdminController@login'
    ]);
    Route::post('/', [
        'as' => 'admin.postLogin',
        'uses' => 'App\Http\Controllers\AdminController@postLogin'
    ]);

    Route::get('/logout', [
        'as' => 'admin.logout',
        'uses' => 'App\Http\Controllers\AdminController@logout'
    ]);

    // END ROUTE LOGIN
    //---------------------------------
    // START ROUTE CATEGORY

    Route::prefix('categories')->group(function () {
            
        Route::get('/index', [
            'as' => 'categories.index' ,
            'uses' => 'App\Http\Controllers\CategoryController@index',
            'middleware' => 'can:category-list'
        ]);

        Route::get('/create', [
            'as' => 'categories.create' ,
            'uses' => 'App\Http\Controllers\CategoryController@create',
            'middleware' => 'can:category-add'
        ]);

    
        Route::post('/store', [
            'as' => 'categories.store' ,
            'uses' => 'App\Http\Controllers\CategoryController@store',
            
        ]);
    
        Route::get('/edit/{id}', [
            'as' => 'categories.edit' ,
            'uses' => 'App\Http\Controllers\CategoryController@edit',
            'middleware' => 'can:category-edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'categories.update' ,
            'uses' => 'App\Http\Controllers\CategoryController@update'
        ]);
    
        Route::get('/delete/{id}', [
            'as' => 'categories.delete' ,
            'uses' => 'App\Http\Controllers\CategoryController@delete',
            'middleware' => 'can:category-delete'
        ]);
    });

    // END ROUTE CATEGORY

    //---------------------------------------------------------------------------

    // START ROUTE MENUS
    
    Route::prefix('menus')->group(function () {
        
        Route::get('/index', [
            'as' => 'menus.index' ,
            'uses' => 'App\Http\Controllers\MenuController@index',
            // 'middleware' => 'can:menu-list'
        ]);

        Route::get('/create', [
            'as' => 'menus.create' ,
            'uses' => 'App\Http\Controllers\MenuController@create',
            // 'middleware' => 'can:menu-add'
        ]);
    
        Route::post('/store', [
            'as' => 'menus.store' ,
            'uses' => 'App\Http\Controllers\MenuController@store'
        ]);
        
        Route::get('/edit/{id}', [
            'as' => 'menus.edit' ,
            'uses' => 'App\Http\Controllers\MenuController@edit',
            'middleware' => 'can:menu-edit'
        ]);
    
        Route::post('/update/{id}', [
            'as' => 'menus.update' ,
            'uses' => 'App\Http\Controllers\MenuController@update'
        ]);
    
        Route::get('/delete/{id}', [
            'as' => 'menus.delete' ,
            'uses' => 'App\Http\Controllers\MenuController@delete',
            'middleware' => 'can:menu-delete'
        ]);
    
    });

    // END ROUTE MENUS

    //----------------------------------------------------------------
    
    // START ROUTE PRODUCTS

    Route::prefix('product')->group(function () {
        
        Route::get('/index', [
            'as' => 'product.index' ,
            'uses' => 'App\Http\Controllers\AdminProductController@index',
            'middleware' => 'can:product-list'
        ]);

        Route::get('/create', [
            'as' => 'product.create' ,
            'uses' => 'App\Http\Controllers\AdminProductController@create',
            'middleware' => 'can:product-add'
        ]);
        
        Route::post('/store', [
            'as' => 'product.store' ,
            'uses' => 'App\Http\Controllers\AdminProductController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'product.edit' ,
            'uses' => 'App\Http\Controllers\AdminProductController@edit',
            'middleware' => 'can:product-edit,id'
        ]);

        Route::post('/update/{id}', [
            'as' => 'product.update' ,
            'uses' => 'App\Http\Controllers\AdminProductController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'product.delete' ,
            'uses' => 'App\Http\Controllers\AdminProductController@delete',
            'middleware' => 'can:product-delete'
        ]);

    });

    // END ROUTE PRODUCTS

    //----------------------------------------------------------------

    // START ROUTE SLIDERS
    Route::prefix('slider')->group(function () {
        
        Route::get('/index', [
            'as' => 'slider.index' ,
            'uses' => 'App\Http\Controllers\AdminSliderController@index',
        ]);
        
        Route::get('/create', [
            'as' => 'slider.create' ,
            'uses' => 'App\Http\Controllers\AdminSliderController@create'
        ]);

        Route::post('/store', [
            'as' => 'slider.store',
            'uses' => 'App\Http\Controllers\AdminSliderController@store'
        ]);

        Route::get('/edit/{id}' , [
            'as' => 'slider.edit',
            'uses' =>  'App\Http\Controllers\AdminSliderController@edit'
        ]);

        Route::post('/update/{id}',[
            'as' => 'slider.update',
            'uses' =>  'App\Http\Controllers\AdminSliderController@update'
        ]);

        Route::get('/delete/{id}',[
            'as' => 'slider.delete',
            'uses' =>   'App\Http\Controllers\AdminSliderController@delete'
        ]);

    });

    // END ROUTE SLIDES

    //----------------------------------------------------------------

    //START ROUTE LINKS

    Route::prefix('links')->group(function () {
        
        Route::get('/index', [
            'as' => 'links.index' ,
            'uses' => 'App\Http\Controllers\AdminLinkController@index'
        ]);

        Route::get('/create', [
            'as' => 'links.create' ,
            'uses' => 'App\Http\Controllers\AdminLinkController@create'
        ]);

        Route::post('/store', [
            'as' => 'links.store' ,
            'uses' => 'App\Http\Controllers\AdminLinkController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'links.edit' ,
            'uses' => 'App\Http\Controllers\AdminLinkController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'links.update' ,
            'uses' => 'App\Http\Controllers\AdminLinkController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'links.delete' ,
            'uses' => 'App\Http\Controllers\AdminLinkController@delete'
        ]);

    });

    // END ROUTE LINKS

    //----------------------------------------------------------------

    // START ROUTE USERS

    Route::prefix('users')->group(function () {
        
        Route::get('/', [
            'as' => 'users.index' ,
            'uses' => 'App\Http\Controllers\AdminUserController@index'
        ]);

        Route::get('/create', [
            'as' => 'users.create' ,
            'uses' => 'App\Http\Controllers\AdminUserController@create'
        ]);

        Route::post('/store', [
            'as' => 'users.store' ,
            'uses' => 'App\Http\Controllers\AdminUserController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'users.edit' ,
            'uses' => 'App\Http\Controllers\AdminUserController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'users.update' ,
            'uses' => 'App\Http\Controllers\AdminUserController@update'
        ]);

        
        Route::get('/delete/{id}', [
            'as' => 'users.delete' ,
            'uses' => 'App\Http\Controllers\AdminUserController@delete'
        ]);


    });

    // END ROUTE USERS

    //----------------------------------------------------------------

    // START ROUTE ROLES
    Route::prefix('roles')->group(function () {
        
        Route::get('/', [
            'as' => 'roles.index' ,
            'uses' => 'App\Http\Controllers\AdminRoleController@index'
        ]);

        Route::get('/create', [
            'as' => 'roles.create' ,
            'uses' => 'App\Http\Controllers\AdminRoleController@create'
        ]);

        Route::post('/store', [
            'as' => 'roles.store' ,
            'uses' => 'App\Http\Controllers\AdminRoleController@store'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'roles.edit' ,
            'uses' => 'App\Http\Controllers\AdminRoleController@edit'
        ]);

        Route::post('/update/{id}', [
            'as' => 'roles.update' ,
            'uses' => 'App\Http\Controllers\AdminRoleController@update'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'roles.delete' ,
            'uses' => 'App\Http\Controllers\AdminRoleController@delete'
        ]);

    });

    // END ROUTE ROLES 

    //----------------------------------------------------------------

    // START ROUTE PERMISSION

    Route::prefix('permissions')->group(function () {

        Route::get('/index', [
            'as' => 'permissions.index' ,
            'uses' => 'App\Http\Controllers\AdminPermissionsController@index'
        ]);
        
        Route::get('/create', [
            'as' => 'permissions.create' ,
            'uses' => 'App\Http\Controllers\AdminPermissionsController@create'
        ]);

        Route::post('/store', [
            'as' => 'permissions.store' ,
            'uses' => 'App\Http\Controllers\AdminPermissionsController@store'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'permissions.delete' ,
            'uses' => 'App\Http\Controllers\AdminPermissionsController@delete'
        ]);
    });

    // END ROUTE PERMISSION

    //----------------------------------------------------------------


    // START ROUTE CUSTOMER CONTACT

    Route::prefix('customer')->group(function(){
        Route::get('/index',[
            'as' => 'customer.index',
            'uses'=> 'App\Http\Controllers\AdminCustomerContact@index'
        ]);
    });

    // END ROUTE CUSTOMER CONTACT

    //----------------------------------------------------------------

});

// END ROUTE ADMIN

//-------------------------------------------------------------------------------

Route::get('/{any}',[
    'as' => 'vue-router',
    'uses' => 'App\Http\Controllers\VueController@index'
])->where('any','.*');

