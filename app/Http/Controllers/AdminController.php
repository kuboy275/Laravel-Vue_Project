<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginAdminRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;

class AdminController extends Controller
{   
 /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/admin';
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function guard()
    {
        return Auth::guard('admin');
    }

    // public function showLogin()
    // {
    //     return view('login');
    // }

    public function showLogin(){

         if(Auth::check()){
             return redirect()->to('/dashboard');
         }

        return view('login');
        
    }
    
    public function login(LoginAdminRequest $request){
        $credentials = $request->only(['email', 'password']);

        if(Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        else{
            Session::flash('msg', "Email hoặc Password không đúng!");
            return redirect()->back();
        }
   }


}
