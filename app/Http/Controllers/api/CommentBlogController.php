<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommentBlog;
use App\Http\Requests\CommentRequest;

class CommentBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        $data = [
            'comment' => $request->comment,
            'blog_id' => $request->blog_id,
            'user_id' => $request->user_id,
            'email' => $request->email,
        ];

        $comment = CommentBlog::create($data);
        return response()->json([
            'status' => 'success',
            'data' => $comment,
            'message' => $comment ? "Comment Creating " : 'Error Creating Comment!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($blog_id)
    {
        $comment = CommentBlog::where('blog_id',$blog_id)->get();
        return response()->json([
            'status' => 'success',
            'data' => $comment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
