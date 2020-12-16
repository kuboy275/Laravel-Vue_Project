<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LinkAddRequest;
use App\Models\Link;
use App\Traits\DeleteModelTrait;
class AdminLinkController extends Controller
{

    use DeleteModelTrait;

    private $link;

    public function __construct(Link $link){
        $this->link =$link;
    }
    public function index(){
        $links = $this->link->latest()->paginate(10);
        return view('admin.links.index',compact('links'));
    }

    public function create(){
        return view("admin.links.add");
    }

    public function store( LinkAddRequest $request ){
        $dataLinkCreate = [
            'config_key' => $request->config_key,
            'config_value' => $request->config_value,
            'type'=>$request->type
        ];

         $this->link->create($dataLinkCreate);
        return redirect()->route('links.index');
    }

    public function edit($id){
        $link = $this->link->find($id);
        return view('admin.links.edit',compact('link'));
    }

    public function update(Request $request , $id){


        $this->link->find($id)->update([
            'config_key' => $request->config_key,
            'config_value' => $request->config_value
        ]);

        return redirect()->route('links.index');
    }

    public function delete($id){
        return $this->deleteModelTrait($id,$this->link);
    }
}
