<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(AuthRequest $request) 
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials, true)) {
            $user = Auth::user();

            $response = [
                'status_code' => 200,
                'status' => 'success',
                'data' => [
                    'name' => $user->name,
                    'token' => $user->createToken('laravue')->plainTextToken
                ],
                'message' => 'Login Successfully.'
            ];
        } else {
             $response = [
                'status_code' => 401,
                'status' => 'error',
                'data' => null,
                'message' => 'Unauthenticated'
            ];
        }

        return response()->json($response);

    }
}
