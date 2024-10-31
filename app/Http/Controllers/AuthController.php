<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {

        return view('auth.login');
    }
    public function loginPost(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        else{
            return view('auth.error');
        }
    }
    public function register(){
        return view('auth.register');
    }
    public  function registerPost(Request $request)
    {
        $request -> validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ]);
        $user = new User();
        $user->name = $request ->name;
        $user->email = $request -> email;
        $user -> password =  Hash::make($request -> password);
        if($user->save()){
            return redirect(route('login'));
        }
        else{
            return view('auth.error');
        }
    }


}
