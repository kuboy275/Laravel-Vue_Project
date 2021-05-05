<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Admin  $user
     * @return mixed
     */
    public function viewAny(Admin $admin)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Product  $product
     * @return mixed
     */
    public function view(Admin $admin)
    {
        return $admin->checkPermissionAccess('Products_list');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Admin  $user
     * @return mixed
     */
    public function create(Admin $admin)
    {
        return $admin->checkPermissionAccess('Products_add');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Product  $product
     * @return mixed
     */
    public function update(Admin $admin)
    {
        

        // Cách 1 : kiểm tra đúng người tạo product mới được sửa

        // $product = Product::find($id);
        // check permission , if id of user match user_id in product talbe when will licensed edit 
        // Kiểm tra đúng user id tạo sản phẩm phải trùng với id đăng nhập khi đó mới cho  update
        // if( $user->checkPermissionAccess('Products_edit') && $user->id === $product->user_id ){
        //     return true;
        // }
        // return  false;

        // cách 2 thông thường 
        return $admin->checkPermissionAccess('Products_edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Product  $product
     * @return mixed
     */
    public function delete(Admin $admin)
    {
        return $admin->checkPermissionAccess('Products_delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Product  $product
     * @return mixed
     */
    public function restore(Admin $admin, Product $product)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Product  $product
     * @return mixed
     */
    public function forceDelete(Admin $admin, Product $product)
    {
        //
    }
}
