<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
use App\Components\PermissionRecusive;
use App\Traits\DeleteModelTrait;

class AdminPermissionsController extends Controller
{
    use DeleteModelTrait;
    private $permission;
    public function __construct(Permission $permission , PermissionRecusive $permissionRecusive){
        $this->permission = $permission;
        $this->permissionRecusive = $permissionRecusive;
    }
    public function index(){
        $permissions =$this->permission->paginate(5);
        return view('admin.permission.index',compact('permissions'));
    }

    public function create(){
        $optionSelect = $this->permissionRecusive->PermissionRecusiveAdd();
        return view('admin.permission.add' , compact('optionSelect'));
    }

    public function store(Request $request){
        $permission = Permission::create([
            'name'=>$request->module_parent,
            'display_name' =>$request->module_parent,
            'parent_id' => 0,
            'key_code' => ''
        ]);

        foreach($request->module_chilrent as $value) {
            Permission::create([
                'name'=> $value,
                'display_name' => $value,
                'parent_id' => $permission->id,
                'key_code'=> $request->module_parent . '_' .$value
            ]);
        }
        return redirect()->route('permissions.index');
    }

    public function delete($id){
        return $this->deleteModelTrait($id,$this->permission);
    }


}
