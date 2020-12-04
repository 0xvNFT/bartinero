<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function __construct()//middleware to prevent unsigned user viewing dashboard
{
    $this->middleware('auth');
}

    public function dashboard(){
        //dd(auth()->user());
        return view('pages.dashboard');
    }
}
