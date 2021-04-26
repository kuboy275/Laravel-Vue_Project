<?php

namespace App\Services;

use Illuminate\Support\Facades\Gate;

class PermissionGateAndPolicyAccess
{

    public function setGateAndPolicyAccess(){

        $this->defineGateCategory();
        $this->defineGateMenu();
        $this->defineGateProduct();
        $this->defineGateCustomer();
        $this->defineGatePost();
        $this->defineGateSlider();
        $this->defineGateLink();
    }
    

    public function defineGateLink(){
        Gate::define('link-list', 'App\Policies\LinkPolicy@view');
        Gate::define('link-add', 'App\Policies\LinkPolicy@create');
        Gate::define('link-edit', 'App\Policies\LinkPolicy@update');
        Gate::define('link-delete', 'App\Policies\LinkPolicy@delete');
    }
    public function defineGateSlider(){
        Gate::define('slider-list', 'App\Policies\SliderPolicy@view');
        Gate::define('slider-add', 'App\Policies\SliderPolicy@create');
        Gate::define('slider-edit', 'App\Policies\SliderPolicy@update');
        Gate::define('slider-delete', 'App\Policies\SliderPolicy@delete');
    }

    // PERMISSION FOR CATEGORY
    public function defineGateCategory(){
        Gate::define('category-list', 'App\Policies\CategoryPolicy@view');
        Gate::define('category-add', 'App\Policies\CategoryPolicy@create');
        Gate::define('category-edit', 'App\Policies\CategoryPolicy@update');
        Gate::define('category-delete', 'App\Policies\CategoryPolicy@delete');
    }

    //PERMISSION FOR MENUS
    public function defineGateMenu(){
        Gate::define('menu-list', 'App\Policies\MenuPolicy@view');
        Gate::define('menu-add', 'App\Policies\MenuPolicy@create');
        Gate::define('menu-edit', 'App\Policies\MenuPolicy@update');
        Gate::define('menu-delete', 'App\Policies\MenuPolicy@delete');
    }

    // PERMISSON FOR PRODUCTS
    public function defineGateProduct(){
        Gate::define('product-list', 'App\Policies\ProductPolicy@view');
        Gate::define('product-add', 'App\Policies\ProductPolicy@create');
        Gate::define('product-edit', 'App\Policies\ProductPolicy@update');
        Gate::define('product-delete', 'App\Policies\ProductPolicy@delete');
    }

    public function defineGateCustomer(){
        Gate::define('customer-list', 'App\Policies\CustomerPolicy@view');
    }

    public function defineGatePost(){
        Gate::define('post-list', 'App\Policies\PostPolicy@view');
        Gate::define('post-add', 'App\Policies\PostPolicy@create');
        Gate::define('post-edit', 'App\Policies\PostPolicy@update');
        Gate::define('post-delete', 'App\Policies\PostPolicy@delete');
    }

}
