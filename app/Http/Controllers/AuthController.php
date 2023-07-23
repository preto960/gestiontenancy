<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Routes;
use App\Models\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(), 
            [
                'login' => 'required',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }
            $user = User::where('email', $request->login)
                    ->orWhere('username', $request->login)
                    ->first();
            $remember = $request->remember;
            if($user){
                if($user->status == 1){
                    if(Hash::check($request->password, $user->password)){
                        Auth::attempt($request->only(['email', 'password']), $remember);
                        $token = $user->createToken("API", [], now()->addHours(3));
                        $user->getPermissionsViaRoles();
                        return response()->json([
                            'status' => true, 
                            'message' => 'User Logged In Successfully',
                            'data' => [
                                'token' => $token->plainTextToken,
                                'user' => ['email' => $user->email, 'username' => $user->username, 'roles' => $user->roles, 'profile' => $user->profile],
                            ]
                        ], 200);
                    }else{
                        return response()->json([
                            'status' => false,
                            'message' => 'Password does not match with our record.',
                        ], 401);
                    }
                }else{
                    return response()->json([
                        'status' => false,
                        'message' => 'Status is Inactive.',
                    ], 401);
                }
            }else{
                if (!$user) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Email or Username does not match with our record.',
                    ], 401);
                }
        
                if (!Hash::check($request->password, $user->password)) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Password does not match with our record.',
                    ], 401);
                }
            }

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            $user = $request->user();
            $user->tokens()->delete();
            Auth::guard('web')->logout();
            session()->regenerateToken();
            return response(['status' => true,'message'=>'Successfully Logging out']);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function register(Request $request)
    {
        $data = $request->all();
        Validator::make($data, [
            /* 'name' => ['required', 'string', 'max:255'], */
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);

        return User::create([
            /* 'name' => $data['name'], */
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'status' => 1,
        ]);
    }

    public function routes()
    {
        try {
            $routes = Routes::all();
            return response(['status' => true,'data' => $routes]);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function config()
    {
        try {
            $config = Config::all();
            return response(['status' => true,'data' => $config]);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
