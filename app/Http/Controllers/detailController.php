<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

class detailController extends Controller
{
    public function index($id){
        $data = Ticket::find($id);
        $data["tickets"] = Ticket::all();
        return view("MenuClient/detailC", $data,compact('data'));
    }
}
