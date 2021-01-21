<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Traits\StorageImageTrait;
use App\Http\Requests\postAddRequest;

class AdminPostController extends Controller
{
    use StorageImageTrait;
    private $post ;
    public function __construct(Post $post){
        $this->post = $post;
        
    }

    public function index(){
        $posts = $this->post->latest()->paginate(10);
        return view('admin.post.index' , compact("posts"));
    }

    public function create(){
        return view('admin.post.create');
    }

    public function store(postAddRequest $request){
        $dataInsert = [
            'title' => $request->title,
            'body' => $request->body,
            'published_at' => $request->published_at
        ];
        $dataImagePath = $this->storageTraitUpload($request,'img_path','post');
        if(!empty($dataImagePath)){
            $dataInsert['img_path'] = $dataImagePath['file_path'];
            $dataInsert['img_name'] = $dataImagePath['file_name'];
        };

        $this->post->create($dataInsert);
        return redirect()->route('post.index');
    }

    public function edit($id){
        $posts = $this->post->find($id);
        return view('admin.post.edit',compact("posts"));
    }

    public function update(Request $request , $id){

        $dataUpdate = [
            'title' => $request->title,
            'body' => $request->body,
            'published_at' => $request->published_at
        ];
        $dataImagePath = $this->storageTraitUpload($request,'img_path','post');
        if(!empty($dataImagePath)){
            $dataUpdate['img_path'] = $dataImagePath['file_path'];
            $dataUpdate['img_name'] = $dataImagePath['file_name'];
        };
        $this->post->find($id)->update($dataUpdate);
        return redirect()->route('post.index');
    }

    public function delete($id){

        try {
            $this->post->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'Succes'
            ]);
        } catch (\Exception $exception) {
            Log::error('Message: ' . $exception->getMessage() . ' --- Line : ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }

    }
}
