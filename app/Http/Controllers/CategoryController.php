<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recusive;
use Illuminate\Support\Str;
// use App\Repositories\CategoryRepository;
use App\Http\Requests\CategoryRequest;
use App\Traits\DeleteModelTrait;

class CategoryController extends Controller
{   
    use DeleteModelTrait;

    private $category;
    
    public function __construct(Category $category){
        $this->category = $category;
    }
    
    public function index(){
        $categories = $this->category->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function getCategory($parentId){
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);

        return $htmlOption;
    }

    public function create(){
        $htmlOption = $this->getCategory($parentId = '');

        return view('admin.category.add' , compact('htmlOption'));    
    }

    public function store(CategoryRequest $req){
        $this->category->create([
            'name'=> $req->name,
            'parent_id' => $req->parent_id,
            'slug' => str::slug( $req->name)
        ]);

        return redirect()->route('categories.index');
    }

    public function edit( $id ){
        $category = $this->category->find($id);
        $htmlOption = $this->getCategory($category->parent_id);

        return view('admin.category.edit', compact('category', 'htmlOption'));
    }

    public function update(CategoryRequest $req,$id){
        $this->category->find($id)->update([
            'name'=> $req->name,
            'parent_id' => $req->parent_id,
            'slug' => str::slug( $req->name)
        ]);
        return redirect()->route('categories.index');
    }

    public function delete($id) {
        return $this->deleteModelTrait($id,$this->category);
    }

}
