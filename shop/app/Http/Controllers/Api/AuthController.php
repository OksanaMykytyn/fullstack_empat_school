<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $isUserExists = User::where('email', $request->email)->exists();

        if ($isUserExists) {
            return response()->json([
                'success' => false,
                'data' => 'User with email already exists'
            ], 400);
        }

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

        $token = $user->createToken('default')->plainTextToken;
        return response()->json([
            'success' => true,
            'data'          => [
                'name' => $user->name,
                'access_token'  => $token,
                'token_type'    => 'Bearer'
            ]
        ]);
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User doesn`t exist'
            ], 400);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Wrong password'
            ], 400);
        }
        $token = $user->createToken('default')->plainTextToken;

        return response()->json([
            'success' => true,
            'email' => $user->email,
            'message'       => 'Login success',
            'access_token'  => $token,
            'token_type'    => 'Bearer'
        ]);
    }

    public function logout()
    {
        Auth::user()->tokens->delete();
        return response()->json([
            'message' => 'Logout successfull'
        ]);
    }
}
