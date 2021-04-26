<?php

namespace App\Http\Controllers;

use App\Components\MenuRecusive;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\MenuRequest;
use App\Traits\DeleteModelTrait;


class MenuController extends Controller
{
    use DeleteModelTrait;

    private $menu;

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

    public function store(MenuRequest $req){
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

    public function update($id , MenuRequest $req){
        $this->menu->find($id)->update([
            'name'=> $req->name ,
            'parent_id' =>$req->parent_id,
            'slug'=>str::slug( $req->name)
        ]);
        return redirect()->route('menus.index');
    }


    public function delete($id) {
        return $this->deleteModelTrait($id,$this->menu);
    }
}
