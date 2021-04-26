<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentBlog;
use App\Traits\DeleteModelTrait;

class AdminCommentController extends Controller
{

    use DeleteModelTrait;

    private $comment ;

    public function __construct(CommentBlog $comment){
        $this->comment = $comment; 
    }

    public function index(){
        $comments = CommentBlog::paginate(10);
        return view('admin.comment.index' ,compact('comments'));
    }

    public function delete($id){
        return $this->deleteModelTrait($id,$this->comment);
    }
}
