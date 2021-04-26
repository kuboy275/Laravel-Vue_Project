<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\order;
use App\Models\User;
use App\Models\Post;
use App\Models\CommentBlog;
use App\Models\Category;
use App\Models\Link;

class AdminHomeController extends Controller
{
    public function index(){
        $products = Product::count();
        $orders = Order::count();
        $users = User::count();
        $blogs = Post::count();
        $comments = CommentBlog::count();
        $categories= Category::count();
        $links= Link::count();

        return view('home',
        compact(['products','orders','users','blogs','comments','categories','links']));
    }

}
