<?php

namespace App\Http\Controllers\testing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login']]);
    // }

    public function register()
    {
        return view('register');
    }
 
    public function registerPost(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        $user->save();
        $token = Auth::login($user);
        // return response()->json([
        //     'status' => 'success',
        //     'message' => 'User created successfully',
        //     'user' => $user,
        //     'authorisation' => [
        //         'token' => $token,
        //         'type' => 'bearer',
        //     ]
        // ])->with('success', 'Register successfully');
        return back()->with('success', 'Register successfully');
    }
 
    public function login()
    {
        return view('login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
 
       
      

        // //check token in browser
        // $request->validate([
        //     'email' => 'required|string|email',
        //     'password' => 'required|string',
        // ]);
        // $credentials = $request->only('email', 'password');

        // $token = Auth::attempt($credentials);
        // if (!$token) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Unauthorized',
        //     ], 401);
        // }
        // $user = Auth::user();
        // return response()->json([
        //         'status' => 'success',
        //         'user' => $user,
        //         'autholization' => [
        //             'token' => $token,
        //             'type' => 'bearer',
        //         ]
        //     ]);

        // $credetials = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];
        
    }

    public function loginApi(Request $request){
        $request->validate([
            "username" => 'required',
            'password' => 'required',
        ]);

        $credentials = $request -> only('username','password');
        $token = Auth::attempt($credentials);
        if(!$token){
            return response()->json([
                'status' => 'error',
                'message' => 'Login Failed!'
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Login Successfully!',
            'token' => $token
        ]);
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}
