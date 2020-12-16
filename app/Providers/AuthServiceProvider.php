<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Product;
use App\Services\PermissionGateAndPolicyAccess;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $permissionGateAndPolicy = new PermissionGateAndPolicyAccess();
        $permissionGateAndPolicy->setGateAndPolicyAccess();

        
        // $this->defineGateCategory();
        // $this->defineGateMenu();
        // Gate::define('menu-list', function ($user) {
        //     return $user->checkPermissionAccess( 'Menus_list' ); 
        // });  

        // Gate::define('menu-add', function ($user) {
        //     return $user->checkPermissionAccess( 'Menus_add'); 
        // }); 

        // Gate::define('menu-edit', function ($user) {
        //     return $user->checkPermissionAccess( 'Menus_edit' ); 
        // }); 

        // Gate::define('menu-delete', function ($user) {
        //     return $user->checkPermissionAccess( 'Menus_delete' ); 
        // }); 



        
        // Gate::define('products-edit', function ($user ,$id) {
        //    
        //     $product = Product::find($id);
        //     if( $user->checkPermissionAccess( 'Products_edit' ) && $user->id === $product->user_id ){
        //         return true;
        //     }
        //     return false;
        // });

        
        // Gate::define('products-delete', function ($user) {
        //     return $user->checkPermissionAccess( 'Products_delete' ); 
        // });

    }






    // PERMISSION FOR PRODUCTS
    // public function defineGateProduct(){
    //     Gate::define('products-list','App\Policies\')
    // }


}
