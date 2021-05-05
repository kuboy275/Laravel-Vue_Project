<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Admin;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    use DeleteModelTrait;
    private $admin;
    private $role;
    public function __construct(Admin $admin, Role $role)
    {
        $this->admin = $admin;
        $this->role = $role;
    }

    public function index()
    {

        $admins = $this->admin->paginate(10);
        return view('admin.user.index', compact('admins'));

    }

    public function create()
    {
        $roles = $this->role->all();
        return view('admin.user.add', compact('roles'));
    }

    public function store(Request $request)
    {

        try {
            DB::beginTransaction();
            $user = $this->admin->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user->roles()->attach($request->role_id);
            DB::commit();
            return redirect()->route('users.index');

        } catch (\Exception $exception) {
            DB::rollback();
            Log::error('message : ' . $exception->getMessage() . '--Line: ' . $exception->getLine());
        }
    }

    public function edit($id)
    {
        $roles = $this->role->all();
        $admin = $this->admin->find($id);
        $roleOfUser = $admin->roles;

        return view('admin.user.edit', compact('roles', 'admin', 'roleOfUser'));
    }

    public function update(Request $request, $id)
    {
        try {

            DB::beginTransaction();
            $this->admin->find($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user = $this->admin->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            return redirect()->route('users.index');

        } catch (\Exception $exception) {
            DB::rollback();
            Log::error('message : ' . $exception->getMessage() . '--Line: ' . $exception->getLine());
        }
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->admin);
    }
}
