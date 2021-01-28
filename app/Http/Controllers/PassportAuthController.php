<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserCollection;


class PassportAuthController extends Controller
{
    
    // public function index(){
    //     return response()->json(['user' => auth()->user()], 200);
    // }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:1',
            'email' => 'required|email',
            'password' => 'required|min:1',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = $user->createToken('myproject2')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('myproject2')->accessToken;
    
            return response()->json(['token' => $token , 'user' => $data], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

}
