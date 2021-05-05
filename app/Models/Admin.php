<?php
namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;


class Admin extends Authenticatable
{
    use HasFactory , Notifiable;

    protected $table = 'admins';

    protected $guard = 'admin';
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function checkPermissionAccess($permissionCheck)
    {
        //B1 :  get all permissions of user are login into the system
        $roles = Auth::user()->roles;
        //B2 : compare the values included of the route present see if it exists in the permissions you get or not
        foreach ($roles as $role) {
            $permission = $role->permissions;
            if ($permission->contains('key_code', $permissionCheck)) {
                return true;
            }
        }
        return false;
    }

}