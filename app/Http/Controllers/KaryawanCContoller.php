<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class KaryawanCContoller extends Controller
{
    public function index(){
        $data["users"] = User::all();
        return view("MenuClient/KaryawanC",$data);
    }
}
