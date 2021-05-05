<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Traits\DeleteModelTrait;

class AdminRoleController extends Controller
{
    use DeleteModelTrait;
    private $role;
    private $permission;
    public function __construct(Role $role , Permission $permission){
        $this->role = $role;
        $this->permission = $permission;
    }
    public function index(){
        $roles = $this->role->paginate(10);
        return view('admin.role.index',compact('roles'));
    }

    public function create(){
        $permissionParents = $this->permission->where('parent_id',0)->get();
        return view('admin.role.add',compact('permissionParents'));
    }

    public function store(Request $request){
        $roles = $this->role->create([
            'name' => $request->name,   
            'display_name' =>$request->display_name,
        ]);

        $roles->permissions()->attach($request->permission_id);
        return redirect()->route('roles.index');
    }

    public function edit($id){
        $permissionParents = $this->permission->where('parent_id',0)->get();
        $role = $this->role->find($id);
        $permissionChecked = $role->permissions;
        return view('admin.role.edit',compact('permissionParents','role','permissionChecked'));
    }

    public function update(Request $request , $id){

        $roles = $this->role->find($id);
        $roles->update([
            'name' => $request->name,   
            'display_name' =>$request->display_name,
        ]);

        $roles->permissions()->sync($request->permission_id);
        return redirect()->route('roles.index');
    }

    public function delete($id){
        return $this->deleteModelTrait($id,$this->role);
    }


}
