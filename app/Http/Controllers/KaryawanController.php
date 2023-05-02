<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        return view("/Menu/Karyawan");
    }

    public function client(){
        $data ["tickets"] = Ticket::all();
        return view("/Ticket/client", $data);
    }
}
