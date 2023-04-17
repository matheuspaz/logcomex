<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\MariaDB\UserRepository;
use App\Services\Auth\GenerateTokenService;
use App\Services\Auth\RegisterService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index(
        Request $request,
        RegisterService $registerService,
        GenerateTokenService $generateTokenService
    ): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' =>'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = $registerService->execute(
            name: $request->name,
            email: $request->email,
            password: $request->password
        );

        $token = $generateTokenService->execute(user: $user);

        return response()->json($token);
    }
}
