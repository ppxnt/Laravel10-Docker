<?php

namespace App\Http\Controllers;

use App\Models\Userinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Index Page
    public function home(){
        return view('home');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credentials)) {
            if (Auth::user()->is_admin == 1){
            return redirect()->route('admin.home');
            }else{
            return redirect()->route('rerolls.index');
            }
        }
 
        return redirect()->route('home')->with('error','Email or Password Incorrect!');


        // $input = $request->all();

        // $this->validate($request, [
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);
        
        // if(Auth::attempt(array('email'=> $input['email'], 'password' => $input['password']))){
        //     if (Auth::user()->is_admin == 1){
        //         return redirect()->route('admin.home');
        //     }else{
        //         return redirect()->route('rerolls.home');
        //     }
        // }else{
        //     return redirect()->route('home')->with('error','Email or Password Incorrect!');
        // }
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('home');
    }
}
