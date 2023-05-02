<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProssesController extends Controller
{
    public function index(){
        return view("Menu/Proses");
    }
}
