<?php

namespace App\Http\Controllers;

use App\Components\MenuRecusive;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\menuAddRequest;


class MenuController extends Controller
{
    public function __construct(MenuRecusive $menuRecusive , Menu $menu)
    {
        $this->menuRecusive = $menuRecusive;
        $this->menu = $menu;
    }

    public function index()
    {
        $menus =$this->menu->paginate(5);
        return view('admin.menus.index', compact('menus'));
    }

    public function store(menuAddRequest $req){
        $this->menu->create([ 
            'name'=> $req->name ,
            'parent_id' =>$req->parent_id,
            'slug'=>str::slug( $req->name)
        ]);

        return redirect()->route('menus.index');
    }

    public function create()
    {
        $optionSelect = $this->menuRecusive->MenuRecusiveAdd();
        return view('admin.menus.add', compact('optionSelect'));
    }

    public function edit($id , Request $req){
        $menuShowEdit = $this->menu->find($id);
        $optionSelect = $this->menuRecusive->MenuRecusiveEdit($menuShowEdit->parent_id);
        return view('admin.menus.edit', compact('optionSelect','menuShowEdit'));
    }

    public function update($id , menuAddRequest $req){
        $this->menu->find($id)->update([
            'name'=> $req->name ,
            'parent_id' =>$req->parent_id,
            'slug'=>str::slug( $req->name)
        ]);
        return redirect()->route('menus.index');
    }


    public function delete($id) {
        try {
            $this->menu->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);

        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . ' --- Line : ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }
}
