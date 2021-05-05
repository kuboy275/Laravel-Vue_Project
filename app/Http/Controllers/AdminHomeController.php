<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
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
       

        return view('home',compact([
            'products','orders','users','blogs','comments','categories','links'
        ]));

    }

    public function info(){
        $user = Auth::user();
        dd($user);
        return View::make('partials.hader',['users' => $user]);
        // return view('partials.header',compact(['user']));
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/loginAdmin');

    }


}
