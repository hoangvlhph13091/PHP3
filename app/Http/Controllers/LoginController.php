<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
      
        return view('auth.login');
    }
    public function login(Request $request){
        $request->validate(
            [ 'email'=>'required',
            'password'=>'required',
            
            ],[
            'email.required'=>'Email Không Được Để Trống',
            'password.required'=>'Password Không Được Để Trống'
           
            ]
        );
        $email= $request->email;
        $password=$request->password;


        if (Auth::attempt(['email'=>$email , 'password'=> $password ])){
             $request->session()->regenerate();

            return redirect()->route('home');
        }
        else{
            return redirect()->route('login')->with('error','Sai thông tin rồi thằng lone');
        }

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));

    }
}
