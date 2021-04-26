<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use JWTAuth;
use JWTException;
use App\Models\User;
use Illuminate\Http\Response;


class AuthController extends Controller
{
    
    public function register(RegisterRequest $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];
        $user = User::create($data);
        $user->is_admin = 0;
        $token = JWTAuth::fromUser($user);
        return response()->json([
            'status'=> 200,
            'message'=> 'User created successfully',
            'user'=>$user,
            'token' => $token
        ]);
    }

    public function login(Request $request) {

        $credentials = $request->only('email', 'password');

        if (!$jwt_token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Email hoặc mật khẩu không đúng, vui lòng đăng nhập lại!',
            ], Response::HTTP_UNAUTHORIZED);
        }

        return response()->json([
            'success' => true,
            'user' => JWTAuth::user(),
            'token' => $jwt_token,
        ]);

    }

}
