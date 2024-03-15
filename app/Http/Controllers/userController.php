<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class userController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('API Token')->plainTextToken;

            return response()->json([
                'data' => $user,
                'token' => $token,
                'errors' => null
            ]);
        }

        return response()->json([
            'data' => null,
            'errors' => 'Invalid credentials'
        ], 401);
    }

    public function getCurrentUser(Request $request)
    {
        $user = $request->user();

        return response()->json([
            'data' => $user,
            'errors' => null
        ]);
    }

    public function updateUser(Request $request)
    {
        $user = $request->user();
        $user->update($request->all());

        return response()->json([
            'data' => $user,
            'errors' => null
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'data' => true,
            'errors' => null
        ]);
    }
}
