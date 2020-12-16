<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminHomeController extends Controller
{
    public function index(){
        $users = Auth::user()->name;
        return view('home',compact('users'));
    }
}
