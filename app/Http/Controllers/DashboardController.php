<?php

namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index($id){
        $data = Ticket::find($id);
        return view("/dashboard", compact ('data'));
    }
}
