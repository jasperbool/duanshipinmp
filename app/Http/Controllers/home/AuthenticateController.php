<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthenticateController extends BaseController
{

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username'    => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->failed($validator->errors()->toArray(), 401);
        }

        $credentials = $request->only('username', 'password');

        if (! $token = auth('member')->attempt($credentials)) {
            return $this->failed('账号或密码不正确', 401);
        }

        $user = auth('member')->user();
        $user->token = $token;
        return $this->success($user);

    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth('member')->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('member')->factory()->getTTL() * 60
        ]);
    }

}
