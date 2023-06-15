<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Input Register
    public function register_page(){
        return view('register');
    }

    public function register(Request $request){

        $request -> validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|string|email',
            'password' => 'required|string',
            'username' => 'required',
            'company' => 'required',
            'nationality' => 'required'
        ]);

        $userinfo = new User;
        $userinfo->name = $request->name;
        $userinfo->phone = $request->phone;
        $userinfo->email = $request->email;
        $userinfo->password = Hash::make($request->password);
        $userinfo->username = $request->username;
        $userinfo->company = $request->company;
        $userinfo->nationality = $request->nationality;
        $userinfo->save();
        $token = Auth::login($userinfo);
        return redirect()->route('home')->with('success','User has been created successfully!')->with('token',$token);
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
}
