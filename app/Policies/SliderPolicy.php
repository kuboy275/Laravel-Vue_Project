<?php

namespace App\Policies;

use App\Models\Slider;
use App\Models\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class SliderPolicy
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
     * @param  \App\Models\Slider  $slider
     * @return mixed
     */
    public function view(Admin $admin)
    {
        return $admin->checkPermissionAccess('Slider_list');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Admin  $user
     * @return mixed
     */
    public function create(Admin $admin)
    {
        return $admin->checkPermissionAccess('Slider_add');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Slider  $slider
     * @return mixed
     */
    public function update(Admin $admin)
    {
        return $admin->checkPermissionAccess('Slider_edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Slider  $slider
     * @return mixed
     */
    public function delete(Admin $admin)
    {
        return $admin->checkPermissionAccess('Slider_delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Slider  $slider
     * @return mixed
     */
    public function restore(Admin $admin, Slider $slider)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Admin  $user
     * @param  \App\Models\Slider  $slider
     * @return mixed
     */
    public function forceDelete(Admin $admin, Slider $slider)
    {
        //
    }
}
