<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;//hashing
use Illuminate\Http\Request;//validation ito for request

//controller view para sa routing
class PagesController extends Controller
{
    //public function index(){
    //    return view('pages.index');
    //}
    public function categories(){
        return view('pages.categories');
    }
    public function single(){
        return view('pages.single');
    }
    
}
