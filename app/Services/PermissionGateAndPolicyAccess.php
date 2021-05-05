<?php

namespace App\Services;

use Illuminate\Support\Facades\Gate;
use App\Policies\RolePolicy;
use App\Policies\CategoryPolicy;
use App\Policies\ProductPolicy;
use App\Policies\PostPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\AdminPolicy;
use App\Policies\CommentPolicy;
use App\Policies\SliderPolicy;
use App\Policies\LinkPolicy;
use App\Policies\OrderPolicy;

class PermissionGateAndPolicyAccess
{

    public function setGateAndPolicyAccess() {

        $this->defineGateRole();
        $this->defineGateCategory();
        $this->defineGateProduct();
        $this->defineGatePost();
        $this->defineGatePermission();
        $this->defineGateAdmin();
        $this->defineGateComment();
        $this->defineGateOrder();

        $this->defineGateMenu();
        $this->defineGateSlider();
        $this->defineGateLink();
    }


    // PERMISSION FOR ROLE

    public function defineGateRole(){
        Gate::define('view', [RolePolicy::class,'view']);
        Gate::define('create', [RolePolicy::class,'create']);
        Gate::define('update', [RolePolicy::class,'update']);
        Gate::define('delete', [RolePolicy::class,'delete']);
    }

    // PERMISSION FOR CATEGORY   
    public function defineGateCategory(){
        Gate::define('cate-view', [CategoryPolicy::class,'view']);
        Gate::define('cate-create', [CategoryPolicy::class,'create']);
        Gate::define('cate-update', [CategoryPolicy::class,'update']);
        Gate::define('cate-delete', [CategoryPolicy::class,'delete']);
    }

    // PERMISSON FOR PRODUCTS
    public function defineGateProduct(){
        Gate::define('product-view', [ProductPolicy::class,'view']);
        Gate::define('product-create', [ProductPolicy::class,'create']);
        Gate::define('product-update', [ProductPolicy::class,'update']);
        Gate::define('product-delete', [ProductPolicy::class,'delete']);
    }

    // PERMISSIONS FOR POST BLOG
    public function defineGatePost(){
        Gate::define('post-view', [PostPolicy::class,'view']);
        Gate::define('post-create', [PostPolicy::class,'create']);
        Gate::define('post-update', [PostPolicy::class,'update']);
        Gate::define('post-delete', [PostPolicy::class,'delete']);
  
    }
    // PERMISSIONS 
    public function defineGatePermission(){
        Gate::define('per-view', [PermissionPolicy::class,'view']);
        Gate::define('per-create', [PermissionPolicy::class,'create']);
        Gate::define('per-delete', [PermissionPolicy::class,'videlete']);
    }

    // PERMISSION FOR ADMIN LIST
    public function defineGateAdmin(){
        Gate::define('admin-view', [AdminPolicy::class,'view']);
        Gate::define('admin-create', [AdminPolicy::class,'create']);
        Gate::define('admin-update', [AdminPolicy::class,'update']);
        Gate::define('admin-delete', [AdminPolicy::class,'delete']);
    }

    // PERMISSION FOR COMMENT
    public function defineGateComment(){
        Gate::define('comment_view', [CommentPolicy::class,'view']);
        Gate::define('comment_delete', [CommentPolicy::class,'delete']);
    }

    //PERMISSION FOR SLIDER
    public function defineGateSlider(){
        Gate::define('slider_view',[SliderPolicy::class,'view']);
        Gate::define('slider_create',[SliderPolicy::class,'create']);
        Gate::define('slider_update',[SliderPolicy::class,'update']);
        Gate::define('slider_delete',[SliderPolicy::class,'delete']);
    }

    // PERMISSION FOR LINKS

    public function defineGateLink(){
        Gate::define('link-view', [LinkPolicy::class,'view']);
        Gate::define('link-create', [LinkPolicy::class,'create']);
        Gate::define('link-update', [LinkPolicy::class,'update']);
        Gate::define('link-delete', [LinkPolicy::class,'delete']);
       
    }

    // PERMISSION FOR ORDER
    public function defineGateOrder(){
        Gate::define('order-view', [OrderPolicy::class,'view']);
        Gate::define('order-delete', [OrderPolicy::class,'delete']);
    }

 
    //PERMISSION FOR MENUS
    public function defineGateMenu(){
        Gate::define('menu-list', 'App\Policies\MenuPolicy@view');
        Gate::define('menu-add', 'App\Policies\MenuPolicy@create');
        Gate::define('menu-edit', 'App\Policies\MenuPolicy@update');
        Gate::define('menu-delete', 'App\Policies\MenuPolicy@delete');
    }

}
