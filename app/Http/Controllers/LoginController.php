<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view("/login/index");
    }

    public function auth(Request $request){

        if(!Auth::attempt($request->only(["email","password"]))){
            return back()->with("error", "Email/Password Salah");
        }

        if(Auth::user()->divisi == "IT"){
            return redirect('/dashboard');
            }
            if(Auth::user()->divisi == "marketing"){
            return redirect('/Menu/clientlogin');
            }
            if(Auth::user()->divisi == "Supir"){
                return redirect('/Menu/clientlogin');
                }
                
    }

    public function logout(){
        Auth::logout();

        return redirect("/");
    }
}
