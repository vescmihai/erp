<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
      $rules=[
        'email' => 'required|string|email|max:100',
        'password'=> 'required|string'
      ];
      $validator = Validator::make($request->input(),$rules);
      if($validator->fails()){
        return response()->json([
            'status'=>false,
            'errors' => $validator->errors()->all()
        ], 400);

      }

      if(!Auth::attempt($request->only('email','password'))){
            return response()->json([
                'status'=>false,
                'errors'=>['Unauthorized']
            ],401);
      }
      $user = User::where('email',$request->email)->first();
      return response()->json([
        'status'=>true,
        'message'=>'User create successfully',
        'data'=>$user,
        'token'=>$user->createToken('API_TOKEN')->plainTextToken
      ],200);
    }

    public function logout(Request $request){
      $request->user()->tokens()->delete();
        return response()->json([
            'status'=>true,
            'message'=>'User logged out successfully'
        ],200);
    }
}
