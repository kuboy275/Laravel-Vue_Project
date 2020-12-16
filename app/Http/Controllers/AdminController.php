<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AdminController extends Controller
{

    public function login(){
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }


    public function postLogin(Request $request ){
        $remember = $request->has('remember_me') ? true : false;
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember)) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    }

}
