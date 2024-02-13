<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SecurityController extends Controller
{
    public function login(Request $request)
    {

        try {
            $validation = Validator::make(request()->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validation->errors()
                ], 401);
            }
            //verifi si leuser exist
            if (!Auth::attempt($request->only(['email', 'password']))) {
                return response()->json([
                    'status' => false,
                    'message' => "L'email ou le mot de passe ne sont pas correct"
                ], 401);
            }

            $user = User::where("email", $request->email)->first();

            return response()->json([
                "status" => true,
                "message" => "User connecté",
                "user" => $user,
                //plainTextToken  => token en forme de string
                "token" => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 403);
        }
    }

    public function register(Request $request)
    {
        try {
            $validation = Validator::make(request()->all(), [
                'userPseudo' => 'required|unique:users,userPseudo',
                'userLastName' => 'required',
                'userFirstName' => 'required',
                'bookingHistory' => 'nullable|string',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:6',
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Validation error',
                    'errors' => $validation->errors(),
                ], 401);
            }

            $user = User::create([
                'userPseudo' => request('userPseudo'),
                'userFirstName' => request('userFirstName'),
                'userLastName' => request('userLastName'),
                'bookingHistory' => request('bookingHistory'),
                'email' => request('email'),
                'role' => 'user',
                'password' => Hash::make(request('password')),
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Merci pour votre inscription',
                'token' => $user->createToken('API TOKEN')->plainTextToken
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 403);
        }
    }

    public function logout(Request $request)
    {
        // Auth::logout();
        // $request->user()->tokens()->delete();

        return response()->json(['message' => 'Deconnexion']);
    }
}
