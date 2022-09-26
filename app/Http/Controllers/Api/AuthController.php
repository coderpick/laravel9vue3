<?php

namespace App\Http\Controllers\Api;

use App\Http\HttpResponses;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    use HttpResponses;

    public function register(Request $request)
    {
        /* validate request */
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 400);
        }

        $input = $request->all();

        $input['password'] = bcrypt($input['password']);

        $user = User::create($input);

        $data['token'] = $user->createToken('MyApp')->plainTextToken;
        $data['name'] = $user->name;

        $response = [
            'success' => true,
            'message' => "User register successfully",
            'data' => $data,
            'user' => $user
        ];

        return response()->json($response, 200);
    }

    public function login(Request $request)
    {

        /* validate request */
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response, 400);
        }


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $data['token'] = $user->createToken('MyApp')->plainTextToken;
            $data['name'] = $user->name;

            $response = [
                'success' => true,
                'message' => "User login successfully",
                'data' => $data,
                'user' => $user
            ];

            return response()->json($response, 200);
        } else {


            $response = [
                'success' => false,
                'message' => "Credentials does not match",

            ];

            return response()->json($response, 401);
        }
    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
        return response()->json([
            'success' => true,
            'message' => "User logout successfully",
        ]);

    }
}
